<?php

declare(strict_types=1);

namespace Ardillo\Examples\Dns\Prefs;

use Ardillo\Examples\Dns\App;
use Ardillo\{
    Align,
    Entry,
    Checkbox,
    Grid,
    Label,
    Window as ArdilloWindow,
};

class Window extends ArdilloWindow
{
    /** @var array<int, Checkbox> */
    public array $typeBoxes;

    public Entry $nsField;
    public Grid $grid;
    public Label $nsLabel;
    public Label $qLabel;
    public OkButton $okButton;
    public CancelButton $cancelButton;

    public function onClosing(): int
    {
        return 1;
    }

    public function setup(): void
    {
        assert($this->app instanceof App);

        $this->grid = new Grid;
        $this->grid->setPadded(true);

        $this->nsLabel = new Label('Nameserver');
        $this->grid->append($this->nsLabel, 0, 0, 2, 1, true, Align::Fill, false, Align::Center);

        $this->nsField = new Entry();
        $this->nsField->setText($this->app->nameserver);
        $this->grid->append($this->nsField, 1, 0, 2, 1, false, Align::End, false, Align::Fill);

        $this->qLabel = new Label('Lookup queries');
        $this->grid->append($this->qLabel, 0, 3, 2, 1, false, Align::Fill, false, Align::Fill);

        $x = $y = 0;

        foreach ($this->app::QUERY_TYPES as $k => $v) {
            assert(is_integer($k));

            $this->typeBoxes[$k] = new Checkbox($v);
            $this->typeBoxes[$k]->setChecked($this->app->querySelection[$k]);
            $this->grid->append($this->typeBoxes[$k], $x + 0, $y + 4, 1, 1, false, Align::Fill, false, Align::Fill);

            if (++$x == 3) {
                $y++;
                $x = 0;
            }
        }

        $this->okButton = new OkButton('OK');
        $this->grid->append($this->okButton, 0, $y + 4, 1, 1, false, Align::Fill, false, Align::Start);

        $this->cancelButton = new CancelButton('Cancel');
        $this->grid->append($this->cancelButton, 2, $y + 4, 1, 1, false, Align::Fill, false, Align::End);

        $this->setResizeable(false);
        $this->setMargined(true);
        $this->setChild($this->grid);
    }
}
