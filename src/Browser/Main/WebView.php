<?php

declare(strict_types=1);

namespace Ardillo\Examples\Browser\Main;

use Ardillo\Examples\Browser\App;
use Ardillo\WebView as ArdilloWebView;

class WebView extends ArdilloWebView
{
    public function onMessage(string $message): void
    {
        assert($this->app instanceof App);

        if ($message === 'about:blank') {
            return;
        }

        $this->app->win->statusBar->setText("Navigated to {$message}");
        $this->app->win->input->setText($message);
    }
}
