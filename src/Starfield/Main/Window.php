<?php

declare(strict_types=1);

namespace Ardillo\Examples\Starfield\Main;

use Ardillo\Examples\Starfield\App;
use Ardillo\{
    Align,
    Area,
    Color,
    DrawBrush,
    Grid,
    Label,
    VerticalBox,
    Window as ArdilloWindow,
};

class Window extends ArdilloWindow
{
    public int $speed = 10;

    public int $starCount = 500;

    /** @var list<Label> */
    public array $labels = [];

    public Area $area;
    public Color $black;
    public Color $starColor;
    public ColorButton $colorBtn;
    public Countbox $countInput;
    public DrawBrush $brush;
    public Handler $handler;
    public Grid $controls;
    public Speedbox $speedInput;
    public VerticalBox $container;

    public function setup(): void
    {
        assert($this->app instanceof App);

        $this->black = Color::fromRGB(0x000000);
        $this->starColor = Color::fromRGB(0xffffff);

        $this->container = new VerticalBox;
        $this->container->setPadded(false);

        $this->controls = new Grid;
        $this->controls->setPadded(true);
        $this->container->append($this->controls, false);

        $label = new Label('Star color');
        $this->controls->append($label, 0, 0, 1, 1, false, Align::Fill, false, Align::Center);
        $this->labels[] = $label;

        $this->colorBtn = new ColorButton;
        $this->colorBtn->setColor($this->starColor);
        $this->controls->append($this->colorBtn, 1, 0, 1, 1, false, Align::Fill, false, Align::Center);

        $label = new Label('Speed');
        $this->controls->append($label, 2, 0, 1, 1, false, Align::Fill, false, Align::Center);
        $this->labels[] = $label;

        $this->speedInput = new Speedbox(1, 100);
        $this->speedInput->setValue($this->speed);
        $this->controls->append($this->speedInput, 3, 0, 1, 1, false, Align::Fill, false, Align::Center);

        $label = new Label('Star count');
        $this->controls->append($label, 4, 0, 1, 1, false, Align::Fill, false, Align::Center);
        $this->labels[] = $label;

        $this->countInput = new Countbox(100, 1000);
        $this->countInput->setValue($this->starCount);
        $this->controls->append($this->countInput, 5, 0, 1, 1, false, Align::Fill, false, Align::Center);

        $this->brush = new DrawBrush;
        $this->handler = new Handler;

        $this->area = new Area($this->handler);
        $this->container->append($this->area, true);

        $this->setMargined(false);
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
