<?php

declare(strict_types=1);

namespace Ardillo\Examples\Browser\Main;

use Ardillo\Examples\Browser\App;
use Ardillo\{
    Entry,
    HorizontalBox,
    Label,
    VerticalBox,
    WebViewParams,
    Window as ArdilloWindow
};

class Window extends ArdilloWindow
{
    public VerticalBox $vb;
    public HorizontalBox $hb;
    public Entry $input;
    public GoButton $button;
    public WebView $webView;
    public Label $statusBar;

    public function onClosing(): int
    {
        $this->app->stop();

        return 1;
    }

    public function setup(): void
    {
        $this->vb = new VerticalBox();
        $this->vb->setPadded(false);

        $this->hb = new HorizontalBox();
        $this->hb->setPadded(false);

        $this->input = new Entry();
        $this->input->setText(App::START_URI);
        $this->hb->append($this->input, true);

        $this->button = new GoButton('Go');
        $this->hb->append($this->button, false);

        $wParams = new WebViewParams;
        $wParams->setEnableDevTools(true);
        $wParams->setInitScript(<<<EOD
            function onNavChange() {
                if (typeof webkit !== 'undefined') {
                    /* Unices */
                    webkit.messageHandlers.webview.postMessage(document.location.href);
                } else if (typeof chrome !== 'undefined') {
                    /* Windows */
                    chrome.webview.postMessage(document.location.href);
                } else {
                    console.error('Unsupported webview engine');
                }
            }
            window.addEventListener('popstate', onNavChange);
            onNavChange();
        EOD);
        $wParams->setCustomUriSchemes('custom');

        $this->webView = new WebView($wParams);

        $this->statusBar = new Label('Ready');

        $this->vb->append($this->hb, false);
        $this->vb->append($this->webView, true);
        $this->vb->append($this->statusBar, false);

        $this->setMargined(false);
        $this->setChild($this->vb);

        assert($this->app instanceof App);

        $this->webView->setHtml($this->app->startHtml);
    }
}
