<?php

declare(strict_types=1);

namespace Ardillo\Examples\Dns\Main;

use Ardillo\Examples\Dns\App;
use Ardillo\{
    Entry,
    HorizontalBox,
    Label,
    Table,
    TableModelColumn,
    TableParams,
    TableTextColumnOptionalParams,
    VerticalBox,
    Window as ArdilloWindow
};

class Window extends ArdilloWindow
{
    public VerticalBox $vb;
    public HorizontalBox $hb;
    public Entry $input;
    public LookupButton $button;
    public Table $table;
    public Label $statusBar;

    public function onClosing(): int
    {
        $this->app->stop();

        return 1;
    }

    public function setup(): void
    {
        assert($this->app instanceof App);

        $params = new TableParams;
        $params->setModel($this->app->model);

        $colOps = new TableTextColumnOptionalParams();
        $colOps->setColorModelColumn(-1);

        $this->table = new Table($params);
        $this->table->appendTextColumn('Type', 0, TableModelColumn::NeverEditable, $colOps);
        $this->table->setColumnWidth(0, 50);
        $this->table->appendTextColumn('Address', 1, TableModelColumn::NeverEditable, $colOps);
        $this->table->setColumnWidth(1, 550);

        $this->vb = new VerticalBox();
        $this->vb->setPadded(true);

        $this->hb = new HorizontalBox();
        $this->hb->setPadded(true);

        $this->input = new Entry();
        $this->input->setText('google.com');
        $this->hb->append($this->input, true);

        $this->button = new LookupButton('Lookup');
        $this->hb->append($this->button, false);

        $this->statusBar = new Label('Ready');

        $this->vb->append($this->hb, false);
        $this->vb->append($this->table, true);
        $this->vb->append($this->statusBar, false);

        $this->setMargined(true);
        $this->setChild($this->vb);
    }
}
