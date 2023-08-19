<?php

declare(strict_types=1);

namespace Ardillo\Examples\TableGallery\Main;

use Ardillo\Examples\TableGallery\App;
use Ardillo\{
    Label,
    Table,
    TableModelColumn,
    TableParams,
    TableTextColumnOptionalParams,
    VerticalBox,
    Window as ArdilloWindow,
};

class Window extends ArdilloWindow
{
    public VerticalBox $container;
    public VerticalBox $vb;
    public Table $table;
    public TableParams $tabParams;
    public Label $statusBar;

    public function setup(): void
    {
        assert($this->app instanceof App);

        $this->tabParams = new TableParams;
        $this->tabParams->setModel($this->app->model);

        $colOps = new TableTextColumnOptionalParams();
        $colOps->setColorModelColumn(-1);

        $this->table = new Table($this->tabParams);
        $this->table->appendTextColumn('ID', 0, TableModelColumn::AlwaysEditable, $colOps);
        $this->table->setColumnWidth(0, 50);
        $this->table->appendTextColumn('Name', 1, TableModelColumn::AlwaysEditable, $colOps);
        $this->table->setColumnWidth(1, 200);
        $this->table->appendCheckboxColumn('Y/N', 2, TableModelColumn::AlwaysEditable);
        $this->table->setColumnWidth(2, 40);
        $this->table->appendCheckboxTextColumn('Job Title', 3, TableModelColumn::AlwaysEditable, 4, TableModelColumn::AlwaysEditable, $colOps);
        $this->table->setColumnWidth(3, 250);
        $this->table->appendProgressBarColumn('Progress', 5);
        $this->table->setColumnWidth(4, 100);
        $this->table->appendImageColumn('Logo', 6);
        $this->table->setColumnWidth(5, 40);
        $this->table->appendButtonColumn('Counter', 7, TableModelColumn::AlwaysEditable);
        $this->table->setColumnWidth(6, 70);
        $this->table->appendImageTextColumn('Country', 8, 9, TableModelColumn::NeverEditable, $colOps);
        $this->table->setColumnWidth(6, 70);

        $this->vb = new VerticalBox();
        $this->vb->setPadded(true);

        $this->container = new VerticalBox();
        $this->container->append($this->table, true);

        $this->statusBar = new Label('Ready');

        $this->vb->append($this->container, true);
        $this->vb->append($this->statusBar, false);

        $this->setMargined(true);
        $this->setChild($this->vb);
    }

    public function onClosing(): int
    {
        $this->app->stop();

        return 1;
    }
}
