<?php

declare(strict_types=1);

namespace Ardillo\Examples\Starfield\Main;

use Ardillo\Examples\Starfield\App;
use Ardillo\Spinbox;

class Countbox extends Spinbox
{
    public function onChanged(): void {
        assert($this->app instanceof App);

        $this->app->win->starCount = $this->getValue();
        $this->app->win->area->queueRedrawAll();
    }
}
