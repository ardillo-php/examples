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
    public const START_HTML = '<html><body><h1>Welcome to the Ardillo Browser!</h1></body></html>';

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
        $this->win = new Main\Window('Ardillo Browser', new Size(960, 800), false);
        $this->win->setup();
        $this->win->show();

        $this->loop->addSignal(self::SIGINT, $this->onSigInt(...));
    }
}
