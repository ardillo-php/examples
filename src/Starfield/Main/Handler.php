<?php

declare(strict_types=1);

namespace Ardillo\Examples\Starfield\Main;

use Ardillo\Examples\Starfield\App;
use Ardillo\{
    Area,
    AreaDrawParams,
    AreaKeyEvent,
    AreaMouseEvent,
    AreaHandler,
    DrawFillMode,
    DrawPath,
    Point,
};

class Handler extends AreaHandler
{
    /** @var list<Star> */
    protected array $stars = [];

    public function dragBrokenHandler(Area $area): void
    {
    }

    public function drawHandler(Area $area, AreaDrawParams $params): void
    {
        assert($this->app instanceof App);

        $areaSize = $params->getAreaSize();

        $starDelta = $this->app->win->starCount - count($this->stars);

        if ($starDelta > 0) {
            for ($i = 0; $i < $starDelta; $i++) {
                $this->stars[] = new Star;
            }
        } else if ($starDelta < 0) {
            for ($i = $starDelta; $i < 0; $i++) {
                array_pop($this->stars);
            }
        }

        $this->app->win->brush->setColor($this->app->win->black);
        $path = new DrawPath(DrawFillMode::Winding);
        $path->addRectangle(new Point, $areaSize);
        $path->end();
        $params->fill($path, $this->app->win->brush);

        $this->app->win->brush->setColor($this->app->win->starColor);

        $delta = $this->app->win->speed / 5;

        foreach ($this->stars as $star) {
            $path = $star->getPath($areaSize, $delta);

            if ($path && isset($this->app->win)) {
                $params->fill($path, $this->app->win->brush);
            }
        }
    }

    public function keyEventHandler(Area $area, AreaKeyEvent $e): int
    {
        return 0;
    }

    public function mouseCrossedHandler(Area $area, int $left): void
    {
    }

    public function mouseEventHandler(Area $area, AreaMouseEvent $e): void
    {
    }
}
