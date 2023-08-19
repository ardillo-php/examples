<?php

declare(strict_types=1);

namespace Ardillo\Examples\Snake\Main;

use Ardillo\Examples\Snake\App;
use Ardillo\{
    Area,
    DrawBrush,
    VerticalBox,
    Window as ArdilloWindow,
};

class Window extends ArdilloWindow
{
    public Area $area;
    public DrawBrush $brush;
    public Handler $handler;
    public VerticalBox $container;

    public function setup(): void
    {
        assert($this->app instanceof App);

        $this->container = new VerticalBox;
        $this->container->setPadded(true);

        $this->brush = new DrawBrush;

        $this->handler = new Handler;

        $this->area = new Area($this->handler);
        $this->container->append($this->area, true);

        $this->setMargined(false);
        $this->setResizeable(false);
        $this->setChild($this->container);
    }

    public function onClosing(): int
    {
        assert($this->app instanceof App);

        $this->app->stopDrawing();
        $this->app->stop();

        return 1;
    }
}
