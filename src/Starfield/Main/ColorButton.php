<?php

declare(strict_types=1);

namespace Ardillo\Examples\Starfield\Main;

use Ardillo\Examples\Starfield\App;
use Ardillo\ColorButton as ArdilloColorButton;

class ColorButton extends ArdilloColorButton
{
    public function onChanged(): void {
        assert($this->app instanceof App);

        $this->app->win->starColor = $this->getColor();
        $this->app->win->area->queueRedrawAll();
    }
}
