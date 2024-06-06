<?php

declare(strict_types=1);

namespace Ardillo\Examples\Admin;

use Ardillo\{
    ReactApp,
    Size,
};
use React\Admin\Model\Message;

class App extends ReactApp
{
    public Main\Window $win;

    public string $baseDir = '';

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
        $this->baseDir = __DIR__ . '/../../vendor/almasaeed2010/adminlte';

        $this->win = new Main\Window('Ardillo Admin', new Size(960, 800), false);
        $this->win->setup();
        $this->win->show();

        $this->loop->addSignal(self::SIGINT, $this->onSigInt(...));
    }
}
