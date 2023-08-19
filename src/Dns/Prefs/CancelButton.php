<?php

declare(strict_types=1);

namespace Ardillo\Examples\Dns\Prefs;

use Ardillo\Examples\Dns\App;
use Ardillo\Button;

class CancelButton extends Button
{
    public function onClicked(): void
    {
        assert($this->app instanceof App);
        $this->app->prefsWin->hide();
    }
}
