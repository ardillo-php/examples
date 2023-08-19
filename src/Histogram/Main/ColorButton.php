<?php

declare(strict_types=1);

namespace Ardillo\Examples\Histogram\Main;

use Ardillo\Examples\Histogram\App;
use Ardillo\ColorButton as ArdilloColorButton;

class ColorButton extends ArdilloColorButton
{
    public function onChanged(): void {
        assert($this->app instanceof App);

        $this->app->win->area->queueRedrawAll();
    }
}
