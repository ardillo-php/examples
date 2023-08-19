<?php

declare(strict_types=1);

namespace Ardillo\Examples\TableGallery;

use Ardillo\{
    ReactApp,
    Size,
    TableModel,
};

class App extends ReactApp
{
    public Main\Window $win;

    public Handler $handler;
    public TableModel $model;

    public function onSigInt(int $signo): void
    {
        echo 'Caught SIGINT ...' . PHP_EOL;

        unset($this->win);
        $this->stop();
    }

    protected function OnInit(): void
    {
        $this->handler = new Handler;
        $this->model = new TableModel($this->handler);

        $this->win = new Main\Window('Ardillo Table Gallery', new Size(1000, 600), false);
        $this->win->setup();
        $this->win->show();

        $this->loop->addSignal(self::SIGINT, $this->onSigInt(...));
    }
}
