<?php

declare(strict_types=1);

namespace Ardillo\Examples\Histogram\Main;

use Ardillo\Examples\Histogram\App;
use Ardillo\Spinbox as ArdilloSpinbox;

class Spinbox extends ArdilloSpinbox
{
    public function onChanged(): void {
        assert($this->app instanceof App);

        $this->app->win->area->queueRedrawAll();
    }
}
