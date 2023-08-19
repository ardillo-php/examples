<?php

declare(strict_types=1);

namespace Ardillo\Examples\CsvEdit\Main;

use Ardillo\Examples\CsvEdit\App;
use Ardillo\{
    Label,
    Table,
    TableModelColumn,
    TableParams,
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

        $this->table = new Table($this->tabParams);

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
