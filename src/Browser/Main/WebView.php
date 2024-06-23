<?php

declare(strict_types=1);

namespace Ardillo\Examples\Browser\Main;

use Ardillo\Examples\Browser\App;
use Ardillo\{
    WebView as ArdilloWebView,
    WebViewRequest,
};

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

    public function onRequest(WebViewRequest $request): void
    {
        assert($this->app instanceof App);

        $uri = $request->getUri();
        $parsed = parse_url($uri);

        $body = str_replace(
            [
                '{{ uri }}',
                '{{ scheme }}',
                '{{ host }}',
                '{{ path }}',
            ], [
                $uri,
                $parsed['scheme'] ?? '',
                $parsed['host'] ?? '',
                $parsed['path'] ?? '',
            ],
            $this->app->customHtml
        );

        $request->respond($body, 'text/html');
    }
}
