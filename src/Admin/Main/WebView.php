<?php

declare(strict_types=1);

namespace Ardillo\Examples\Admin\Main;

use Ardillo\Examples\Admin\App;
use Ardillo\{
    WebView as ArdilloWebView,
    WebViewRequest,
};

class WebView extends ArdilloWebView
{
    public function onRequest(WebViewRequest $request): void
    {
        assert($this->app instanceof App);

        $uri = $request->getUri();
        $parsed = parse_url($uri);
        $relPath = $parsed['path'];
        $path = $this->app->baseDir . $relPath;

        if (!file_exists($path)) {
            $request->respond('404 Not Found', 'text/plain');

            echo "Not found {$relPath}" . PHP_EOL;

            return;
        }

        $ext = pathinfo($path, PATHINFO_EXTENSION);

        switch ($ext) {
            case 'html':
                $mime = 'text/html';
                break;

            case 'css':
                $mime = 'text/css';
                break;

            case 'js':
                $mime = 'text/javascript';
                break;

            case 'json':
                $mime = 'application/json';
                break;

            default:
                $mime = 'text/plain';
                break;
        }

        /* Please note the I/O operations against this file are blocking/syncrhonous which is
         * contrary to the non-blocking/asynchronous nature of ReactPHP. This is done for
         * simplicity and to keep the example code short and concise. */
        $body = file_get_contents($path) ?: '';
        $size = filesize($path);

        $request->respond($body, $mime);

        echo "Served {$relPath} ({$mime}) {$size} bytes" . PHP_EOL;
    }
}
