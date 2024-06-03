<?php

declare(strict_types=1);

namespace Ardillo\Examples\Browser\Main;

use Ardillo\Examples\Browser\App;
use Ardillo\Button;

class GoButton extends Button
{
    public function onClicked(): void
    {
        assert($this->app instanceof App);

        $this->app->win->webView->setUri($this->app->win->input->getText());
    }
}
