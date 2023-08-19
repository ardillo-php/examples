<?php

declare(strict_types=1);

namespace Ardillo\Examples\Histogram;

use Ardillo\{
    ReactApp,
    Size,
};

class App extends ReactApp
{
    public Main\Window $win;

    public function onSigInt(int $signo): void
    {
        echo 'Caught SIGINT ...' . PHP_EOL;

        unset($this->win);
        $this->stop();
    }

    protected function OnInit(): void
    {
        $this->win = new Main\Window('Ardillo Histogram', new Size(700, 440), false);
        $this->win->setup();
        $this->win->show();

        $this->loop->addSignal(self::SIGINT, $this->onSigInt(...));
    }
}
