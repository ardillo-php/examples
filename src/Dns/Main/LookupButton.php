<?php

declare(strict_types=1);

namespace Ardillo\Examples\Dns\Main;

use Ardillo\Examples\Dns\App;
use Ardillo\Button;

class LookupButton extends Button
{
    public function onClicked(): void
    {
        assert($this->app instanceof App);
        $this->app->handler->resolve($this->app->model, $this->app->win->input->getText());
    }
}
