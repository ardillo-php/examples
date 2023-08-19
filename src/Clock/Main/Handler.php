<?php

declare(strict_types=1);

namespace Ardillo\Examples\Clock\Main;

use Ardillo\Examples\Clock\App;

use Ardillo\{
    Area,
    AreaDrawParams,
    AreaHandler,
    AreaKeyEvent,
    AreaMouseEvent,
    Color,
    DrawFillMode,
    DrawLineCap,
    DrawLineJoin,
    DrawPath,
    DrawStrokeParams,
    Point,
    Size,
};
use DateTimeImmutable;

class Handler extends AreaHandler
{
    public function dragBrokenHandler(Area $area): void
    {
    }

    public function drawHandler(Area $area, AreaDrawParams $params): void
    {
        assert($this->app instanceof App);

        // Get the current time
        $now = new DateTimeImmutable();

        $areaSize = $params->getAreaSize();
        $halfLength = min($areaSize->width, $areaSize->height) / 2;

        $this->app->win->brush->setColor(Color::fromRGB(0x000000));
        $path = new DrawPath(DrawFillMode::Winding);
        $path->addRectangle(new Point, $areaSize);
        $path->end();
        $params->fill($path, $this->app->win->brush);

        $hour = (int)$now->format('g');
        $minute = (int)$now->format('i');
        $second = (int)$now->format('s');

        echo "Rendering clock at {$hour}:{$minute}:{$second}" . PHP_EOL;

        // Calculate the angles of the hour, minute, and second hands
        $hourAngle = ($hour / 12) * 360 - 90;
        $minuteAngle = ($minute / 60) * 360 - 90;
        $secondAngle = ($second / 60) * 360 - 90;

        // Render the hour & minute marks
        for ($i = 0; $i < 60; $i++) {
            if ($i % 5 === 0) {
                $angle = ($i / 60) * 360;
                $x = $halfLength + (cos(deg2rad($angle)) * ($halfLength - 10));
                $y = $halfLength + (sin(deg2rad($angle)) * ($halfLength - 10));

                $this->app->win->brush->setColor(Color::fromRGB(0xffffff));
                $path = new DrawPath(DrawFillMode::Winding);
                $path->addRectangle(new Point($x, $y), new Size(5, 5));
                $path->end();
                $params->fill($path, $this->app->win->brush);

                continue;
            }

            $angle = ($i / 60) * 360;
            $x = $halfLength + (cos(deg2rad($angle)) * ($halfLength - 10));
            $y = $halfLength + (sin(deg2rad($angle)) * ($halfLength - 10));

            $this->app->win->brush->setColor(Color::fromRGB(0xffffff));
            $path = new DrawPath(DrawFillMode::Winding);
            $path->addRectangle(new Point($x, $y), new Size(2, 2));
            $path->end();
            $params->fill($path, $this->app->win->brush);
        }

        $sParams = new DrawStrokeParams;
        $sParams->setCap(DrawLineCap::Flat);
        $sParams->setJoin(DrawLineJoin::Miter);
        $sParams->setMiterLimit(DrawStrokeParams::DEFAULT_MITER_LIMIT);

        // Render the hour hand
        $hourX = $halfLength + (cos(deg2rad($hourAngle)) * ($halfLength - 50));
        $hourY = $halfLength + (sin(deg2rad($hourAngle)) * ($halfLength - 50));

        $path = new DrawPath(DrawFillMode::Winding);
        $path->newFigure($halfLength, $halfLength);
        $path->lineTo($hourX, $hourY);
        $path->end();
        $sParams->setThickness(5);
        $params->stroke($path, $this->app->win->brush, $sParams);

        // Render the minute hand
        $minuteX = $halfLength + (cos(deg2rad($minuteAngle)) * ($halfLength - 30));
        $minuteY = $halfLength + (sin(deg2rad($minuteAngle)) * ($halfLength - 30));

        $path = new DrawPath(DrawFillMode::Winding);
        $path->newFigure($halfLength, $halfLength);
        $path->lineTo($minuteX, $minuteY);
        $path->end();
        $sParams->setThickness(3);
        $params->stroke($path, $this->app->win->brush, $sParams);

        // Render the second hand
        $secondX = $halfLength + (cos(deg2rad($secondAngle)) * ($halfLength - 20));
        $secondY = $halfLength + (sin(deg2rad($secondAngle)) * ($halfLength - 20));

        $path = new DrawPath(DrawFillMode::Winding);
        $path->newFigure($halfLength, $halfLength);
        $path->lineTo($secondX, $secondY);
        $path->end();
        $sParams->setThickness(1);
        $params->stroke($path, $this->app->win->brush, $sParams);
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
