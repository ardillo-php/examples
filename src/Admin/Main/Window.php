<?php

declare(strict_types=1);

namespace Ardillo\Examples\Admin\Main;

use Ardillo\Examples\Admin\App;
use Ardillo\{
    VerticalBox,
    Window as ArdilloWindow
};

class Window extends ArdilloWindow
{
    public VerticalBox $vb;
    public WebView $webView;

    public function onClosing(): int
    {
        $this->app->stop();

        return 1;
    }

    public function setup(): void
    {
        $this->vb = new VerticalBox();
        $this->vb->setPadded(false);

        $this->webView = new WebView;
        $this->webView->registerUriScheme('admin');
        $this->webView->setInitScript(<<<EOD
            /* Get rid of the demo.js greeting */
            localStorage.setItem('AdminLTE:Demo:MessageShowed', (Date.now()) + (3600 * 1000))
        EOD);

        $this->vb->append($this->webView, true);

        $this->setMargined(false);
        $this->setChild($this->vb);

        $this->webView->enableDevTools(true);
        $this->webView->setUri('admin:///index.html');
    }
}
