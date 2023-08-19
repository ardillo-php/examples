<?php

declare(strict_types=1);

namespace Ardillo\Examples\Starfield;

use Ardillo\{
    ReactApp,
    Size,
    TimedTask,
};

class App extends ReactApp
{
    public Main\Window $win;

    protected TimedTask $timer;

    public function stopDrawing(): void
    {
        if (isset($this->timer)) {
            $this->loop->cancelTimer($this->timer);
        }
    }

    public function onSigInt(int $signo): void
    {
        echo 'Caught SIGINT ...' . PHP_EOL;

        $this->stopDrawing();

        unset($this->win);
        $this->stop();
    }

    protected function OnInit(): void
    {
        $this->win = new Main\Window('Ardillo Starfield', new Size(640, 480), false);
        $this->win->setup();
        $this->win->show();

        $this->timer = $this->loop->addPeriodicTimer(1 / 60, $this->win->area->queueRedrawAll(...));

        $this->loop->addSignal(self::SIGINT, $this->onSigInt(...));
    }
}
