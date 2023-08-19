<?php

declare(strict_types=1);

namespace Ardillo\Examples\CsvEdit;

use Ardillo\{
    Table,
    TableModel,
    TableModelColumn,
    TableModelHandler,
    TableValue,
    TableValueString,
    TableValueType,
};

class Handler extends TableModelHandler
{
    /** @var array<int, array<string>> */
    protected array $dataset = [];

    public function import(string $path): void
    {
        assert($this->app instanceof App);

        if (!is_file($path) || !(is_readable($path))) {
            $this->app->win->messageBox(
                Main\Window::MESSAGE_BOX_ERROR, 'Invalid CSV File',
                "Cannot read {$path}"
            );
            return;
        }

        // async note!
        $fp = fopen($path, 'r');

        if (!$fp) {
            $this->app->win->messageBox(
                Main\Window::MESSAGE_BOX_ERROR, 'Invalid CSV File',
                "Cannot open {$path} for reading"
            );
            return;
        }

        $this->app->win->statusBar->setText("Opening {$path} ...");

        $cols = 0;
        $colWidth = [];
        $dataset = [];

        while ($row = fgetcsv($fp)) {
            if (!$cols) {
                $cols = count($row);
            }

            $dataset[] = $row;

            foreach ($row as $k => $v) {
                if (!isset($colWidth[$k])) {
                    $colWidth[$k] = strlen($v);
                }

                $colWidth[$k] = max($colWidth[$k], strlen($v));
            }
        }

        fclose($fp);

        if (isset($this->app->win->table)) {
            unset($this->app->win->table);
        }

        $this->dataset = $dataset;

        $table = $this->app->win->table = new Table($this->app->win->tabParams);
        $this->app->win->container->append($table, true);

        for ($i = 0; $i < $cols; $i++) {
            $table->appendTextColumn(chr(ord('A') + $i), $i, TableModelColumn::AlwaysEditable, NULL);
            $table->setColumnWidth($i, $colWidth[$i] * 8);
        }

        $this->app->lastPath = $path;
        $this->app->win->statusBar->setText('Loaded ' . count($this->dataset) . ' records');
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

        foreach ($this->dataset as $row) {
            fputcsv($fp, $row);
        }

        fclose($fp);

        $this->app->win->statusBar->setText('Records saved to ' . basename($path));
    }

    public function cellValueHandler(TableModel $model, int $row, int $column): TableValue
    {
        return new TableValueString($this->dataset[$row][$column]);
    }

    public function columnTypeHandler(TableModel $model, int $column): int
    {
        return TableValueType::Str;
    }

    public function numColumnsHandler(TableModel $model): int
    {
        return isset($this->dataset[0]) ? count($this->dataset[0]) : 0;
    }

    public function numRowsHandler(TableModel $model): int
    {
        return count($this->dataset);
    }

    public function setCellValueHandler(TableModel $model, int $row, int $column, ?TableValue $value): void
    {
        assert($value instanceof TableValueString);

        if (isset($this->dataset[$row])) {
            $this->dataset[$row][$column] = $value->get();
        }
    }
}
