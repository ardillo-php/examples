<?php

declare(strict_types=1);

namespace Ardillo\Examples\Histogram\Main;

use Ardillo\Examples\Histogram\App;
use Ardillo\{
    Area,
    AreaDrawParams,
    AreaKeyEvent,
    AreaHandler,
    AreaMouseEvent,
    Color,
    DrawFillMode,
    DrawLineCap,
    DrawLineJoin,
    DrawMatrix,
    DrawPath,
    DrawStrokeParams,
    Point,
};

class Handler extends AreaHandler
{
    /** @var int */
    public const PADDING = 20;

    public function dragBrokenHandler(Area $area): void
    {
    }

    public function drawHandler(Area $area, AreaDrawParams $params): void
    {
        assert($this->app instanceof App);

        $areaSize = $params->getAreaSize();

        $this->app->win->brush->setColor($this->app->win->white);
        $path = new DrawPath(DrawFillMode::Winding);
        $path->addRectangle(new Point, $areaSize);
        $path->end();
        $params->fill($path, $this->app->win->brush);

        $graphWidth = $areaSize->width - self::PADDING * 2;
        $graphHeight = $areaSize->height - self::PADDING * 2;

        $sParams = new DrawStrokeParams;
        $sParams->setCap(DrawLineCap::Flat);
        $sParams->setJoin(DrawLineJoin::Miter);
        $sParams->setThickness(2);
        $sParams->setMiterLimit(DrawStrokeParams::DEFAULT_MITER_LIMIT);

        $this->app->win->brush->setColor($this->app->win->black);
        $path = new DrawPath(DrawFillMode::Winding);
        $path->newFigure(self::PADDING, self::PADDING);
        $path->lineTo(self::PADDING, $graphHeight + self::PADDING);
        $path->lineTo($graphWidth + self::PADDING, $graphHeight + self::PADDING);
        $path->end();
        $params->stroke($path, $this->app->win->brush, $sParams);

        $matrix = new DrawMatrix;
        $matrix->setIdentity();
        $matrix->translate(self::PADDING, self::PADDING);
        $params->transform($matrix);

        /** @var Color */
        $sColor = $this->app->win->colorBtn->getColor();
        /** @var Color */
        $fColor = clone $sColor;
        $fColor->alpha /= 2;
        $this->app->win->brush->setColor($fColor);

        $path = $this->buildGraph($graphWidth, $graphHeight, true);
        $params->fill($path, $this->app->win->brush);

        $path = $this->buildGraph($graphWidth, $graphHeight, false);
        $this->app->win->brush->setColor($sColor);
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

    protected function buildGraph(float $width, float $height, bool $extend): DrawPath
    {
        assert($this->app instanceof App);

        $path = new DrawPath(DrawFillMode::Winding);
        $points = $this->getPointsCoords($width, $height);

        $path->newFigure($points[0][0], $points[0][1]);

        for ($i = 1; $i < $this->app->win::POINTS; $i++) {
            $path->lineTo($points[$i][0], $points[$i][1]);
        }

        if ($extend) {
            $path->lineTo($width, $height);
            $path->lineTo(0, $height);
            $path->closeFigure();
        }

        $path->end();

        return $path;
    }

    /**
     * @return list<array<float>>
     */

    protected function getPointsCoords(float $width, float $height): array
    {
        assert($this->app instanceof App);

        $ret = [];
        $xinc = $width / ($this->app->win::POINTS - 1);
        $yinc = $height / $this->app->win::MAX_SCALE;

        for ($i = 0; $i < $this->app->win::POINTS; $i++) {
            $ret[] = [
                $xinc * $i,
                $yinc * ($this->app->win::MAX_SCALE - $this->app->win->spinners[$i]->getValue()),
            ];
        }

        return $ret;
    }
}
