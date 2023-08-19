<?php

declare(strict_types=1);

namespace Ardillo\Examples\Dns;

use Ardillo\{
    TableModel,
    TableModelHandler,
    TableValue,
    TableValueString,
    TableValueType,
};
use React\Dns\Config\Config;
use React\Dns\Resolver\Factory;
use React\Promise\Deferred;
use Throwable;
use function React\Promise\all;

class Handler extends TableModelHandler
{
    /** @var array<int<0, max>, array<string>> */
    protected array $values = [];

    public function resolve(TableModel $model, string $host): void
    {
        assert($this->app instanceof App);
        $this->app->win->statusBar->setText("Resolving {$host} ...");

        $config = Config::loadSystemConfigBlocking();

        if (!$config->nameservers) {
            $config->nameservers = [$this->app->nameserver];
        }

        $factory = new Factory();
        $dns = $factory->create($config);

        $promises = [];

        foreach ($this->app->querySelection as $type => $enabled) {
            if (!$enabled) {
                continue;
            }

            $deferred = new Deferred();

            $dns->resolveAll($host, $type)
                ->then(function (array $results) use ($deferred): void {
                    $deferred->resolve($results);
                })
                ->otherwise(function (Throwable $t) use ($deferred): void {
                    $deferred->resolve([]);
                });

            $promises[$this->app::QUERY_TYPES[$type]] = $deferred->promise();
        }

        all($promises)
            ->then(function (array $results) use ($model, $host): void {
                $rows = $this->numRowsHandler($model);

                for ($i = $rows - 1; $i >= 0; $i--) {
                    array_pop($this->values);
                    $model->rowDeleted($i);
                }

                $i = 0;

                foreach ($results as $type => $answers) {
                    foreach ($answers as $answer) {
                        if (is_array($answer)) {
                            foreach ($answer as $k => $v) {
                                if (is_string($k) && is_string($v)) {
                                    $answer[$k] = "{$k}={$v}";
                                }
                            }

                            $answer = implode('; ', $answer);
                        }

                        $this->values[$i] = [(string)$type, (string)$answer];
                        $model->rowInserted($i++);
                    }
                }

                assert($this->app instanceof App);
                $this->app->win->statusBar->setText("Done resolving {$host}");
            })
            ->otherwise(function (Throwable $t): void {
                echo 'Error: ' . $t->getMessage() . PHP_EOL;
            });
    }

    public function export(string $path): void
    {
        assert($this->app instanceof App);

        // blocking notice!
        $fp = fopen($path, 'w');

        if (!$fp) {
            $this->app->win->statusBar->setText('Cannot open ' . basename($path));
            return;
        }

        foreach ($this->values as $row) {
            fputcsv($fp, $row);
        }

        fclose($fp);

        $this->app->win->statusBar->setText('Records exported to ' . basename($path));
    }

    public function cellValueHandler(TableModel $model, int $row, int $column): TableValue
    {
        return new TableValueString($this->values[$row][$column] ?? '-');
    }

    public function columnTypeHandler(TableModel $model, int $column): int
    {
        return TableValueType::Str;
    }

    public function numColumnsHandler(TableModel $model): int
    {
        return 2;
    }

    public function numRowsHandler(TableModel $model): int
    {
        return count($this->values);
    }

    public function setCellValueHandler(TableModel $model, int $row, int $column, ?TableValue $value): void
    {
    }
}
