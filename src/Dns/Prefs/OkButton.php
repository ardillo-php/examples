<?php

declare(strict_types=1);

namespace Ardillo\Examples\Dns\Prefs;

use Ardillo\Examples\Dns\App;
use Ardillo\Button;

class OkButton extends Button
{
    public function onClicked(): void
    {
        assert($this->app instanceof App);
        $nameserver = $this->app->prefsWin->nsField->getText();

        if (!filter_var($nameserver, FILTER_VALIDATE_IP)) {
            $this->app->prefsWin->nsField->show();
            $this->app->prefsWin->messageBox(
                Window::MESSAGE_BOX_ERROR, 'Invalid IP address',
                "{$nameserver} is not a valid nameserver, i.e. it must be a valid IP address."
            );
            return;
        }

        $this->app->nameserver = $nameserver;

        foreach ($this->app->prefsWin->typeBoxes as $k => $v){
            $this->app->querySelection[$k] = $v->getChecked();
        }

        $this->app->prefsWin->hide();
        $this->app->win->statusBar->setText('Your preferences have been updated');
    }
}
