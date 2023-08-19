<?php

declare(strict_types=1);

namespace Ardillo\Examples\Histogram\Main;

use Ardillo\Examples\Histogram\App;
use Ardillo\{
    Area,
    ColorButton,
    Color,
    DrawBrush,
    HorizontalBox,
    VerticalBox,
    Window as ArdilloWindow,
};

class Window extends ArdilloWindow
{
    /** @var int */
    public const POINTS = 10;
    public const MAX_SCALE = 100;

    public Color $black;
    public Color $dodgerBlue;
    public Color $white;

    public HorizontalBox $container;
    public VerticalBox $left;
    public Handler $handler;
    public Area $area;
    public DrawBrush $brush;

    /** @var array<int, Spinbox> */
    public array $spinners = [];

    public ColorButton $colorBtn;

    public function setup(): void
    {
        assert($this->app instanceof App);

        $this->black = new Color;
        $this->dodgerBlue = Color::fromRGB(0x1e90ff);
        $this->white = Color::fromRGB(0xffffff);

        $this->container = new HorizontalBox();
        $this->container->setPadded(true);

        $this->left = new VerticalBox();
        $this->left->setPadded(true);

        $this->container->append($this->left, false);

        for ($i = 0; $i < self::POINTS; $i++) {
            $this->spinners[$i] = new Spinbox(0, self::MAX_SCALE);
            $this->spinners[$i]->setValue(mt_rand(0, self::MAX_SCALE));
            $this->left->append($this->spinners[$i], false);
        }

        $this->colorBtn = new ColorButton;
        $this->colorBtn->setColor($this->dodgerBlue);
        $this->left->append($this->colorBtn, false);

        $this->brush = new DrawBrush;
        $this->handler = new Handler;
        $this->area = new Area($this->handler);

        $this->brush->setColor($this->dodgerBlue);

        $this->container->append($this->area, true);

        $this->setMargined(true);
        $this->setChild($this->container);
    }

    public function onClosing(): int
    {
        $this->app->stop();

        return 1;
    }
}
