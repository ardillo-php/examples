<?php

declare(strict_types=1);

namespace Ardillo\Examples\TableGallery;

use Ardillo\{
    Image,
    Size,
    Table,
    TableModel,
    TableModelColumn,
    TableModelHandler,
    TableValue,
    TableValueImage,
    TableValueInt,
    TableValueString,
    TableValueType,
};

use Faker\Factory;

class Handler extends TableModelHandler
{
    /** @var array<int, array<int|string|Image>> */
    private array $dataset = [];

    public function __construct()
    {
        $faker = Factory::create();
        $records = mt_rand(15, 20);

        $phpLogo = require(__DIR__ . '/../../static/images/php-logo.php');

        for ($i = 0; $i < $records; $i++) {
            $country = $faker->countryCode();

            /** @psalm-suppress UnresolvableInclude */
            $this->dataset[] = [
                mt_rand(1000, 9999),
                $faker->name(),
                mt_rand(0, 1),
                mt_rand(0, 1),
                $faker->jobTitle(),
                mt_rand(0, 100),
                $phpLogo,
                0,
                require(__DIR__ . '/../../static/images/flag-' . strtolower($country) . '.php'),
                $country,
            ];
        }
    }

    public function cellValueHandler(TableModel $model, int $row, int $column): TableValue
    {
        switch ($column) {
            case 0:
            case 1:
            case 4:
            case 7:
            case 9:
                assert(is_scalar($this->dataset[$row][$column]));
                return new TableValueString((string)$this->dataset[$row][$column]);

            case 2:
            case 3:
            case 5:
                assert(is_scalar($this->dataset[$row][$column]));
                return new TableValueInt((int)$this->dataset[$row][$column]);

            case 6:
            case 8:
                assert($this->dataset[$row][$column] instanceof Image);
                return new TableValueImage($this->dataset[$row][$column]);
        }

        throw new \Exception('Invalid column');
    }

    public function columnTypeHandler(TableModel $model, int $column): int
    {
        switch ($column) {
            case 0:
            case 1:
            case 4:
            case 7:
            case 9:
                return TableValueType::Str;

            case 2:
            case 3:
            case 5:
                return TableValueType::Number;

            case 6:
            case 8:
                return TableValueType::Image;
        }

        throw new \Exception('Invalid column');
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
        assert(isset($this->dataset[$row]));

        switch ($column) {
            case 0:
                assert($value instanceof TableValueString);
                $this->dataset[$row][$column] = (int)$value->get();
                break;

            case 1:
            case 4:
                assert($value instanceof TableValueString);
                $this->dataset[$row][$column] = $value->get();
                break;

            case 2:
            case 3:
            case 5:
                assert($value instanceof TableValueInt);
                $this->dataset[$row][$column] = $value->get();
                break;

            case 7:
                assert(is_integer($this->dataset[$row][$column]));
                $this->dataset[$row][$column]++;
                break;
        }
    }
}
