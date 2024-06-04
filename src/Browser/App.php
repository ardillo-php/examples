<?php

declare(strict_types=1);

namespace Ardillo\Examples\Browser;

use Ardillo\{
    ReactApp,
    Size,
};
use React\Browser\Model\Message;

class App extends ReactApp
{
    public const START_URI = 'https://ardillo.dev';

    public string $startHtml = '';

    public string $customHtml = '';

    public Main\Window $win;

    public function onShouldQuit(): bool
    {
        return true;
    }

    public function onSigInt(int $signo): void
    {
        echo 'Caught SIGINT ...' . PHP_EOL;

        $this->stop();
    }

    protected function OnInit(): void
    {
        $startHtml = file_get_contents(__DIR__ . '/../../static/html/browser_start.html');
        $customHtml = file_get_contents(__DIR__ . '/../../static/html/browser_custom.html');

        assert($startHtml !== false);
        assert($customHtml !== false);

        $this->startHtml = $startHtml;
        $this->customHtml = $customHtml;

        $this->win = new Main\Window('Ardillo Browser', new Size(960, 800), false);
        $this->win->setup();
        $this->win->show();

        $this->loop->addSignal(self::SIGINT, $this->onSigInt(...));
    }
}
