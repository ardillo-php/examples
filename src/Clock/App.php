<?php

declare(strict_types=1);

namespace Ardillo\Examples\Clock;

use Ardillo\Examples\Clock\Main\Window;

use Ardillo\{
    ReactApp,
    Size,
    TimedTask,
};

class App extends ReactApp
{
    public Window $win;

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
        $this->win = new Window('Ardillo Clock', new Size(400, 400), false);
        $this->win->setup();
        $this->win->show();

        $this->timer = $this->loop->addPeriodicTimer(1 / 2, $this->win->area->queueRedrawAll(...));

        $this->loop->addSignal(self::SIGINT, $this->onSigInt(...));
    }
}
