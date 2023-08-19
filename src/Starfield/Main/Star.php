<?php

declare(strict_types=1);

namespace Ardillo\Examples\Starfield\Main;

use Ardillo\Examples\Starfield\App;
use Ardillo\{
    DrawFillMode,
    DrawPath,
    Point,
    Size,
};

class Star
{
    /** @var int */
    public const FACTOR = 150;

    /** @var int */
    public const MAX_DIST = 500;

    public Point $projection;
    public float $distance = 0;
    public float $width = 3;

    public function __construct()
    {
        $this->distance = mt_rand(0, self::MAX_DIST);
    }

    public function getPath(Size $size, float $delta): ?DrawPath
    {
        $halfX = (int)round($size->width / 2);
        $halfY = (int)round($size->height / 2);

        if (!isset($this->projection)) {
            $this->projection = new Point(mt_rand(-$halfX, $halfX), mt_rand(-$halfY, $halfY));
        }

        $path = new DrawPath(DrawFillMode::Winding);

        $this->distance -= $delta;

        if ($this->distance <= 0) {
            $this->projection = new Point(mt_rand(-$halfX, $halfX), mt_rand(-$halfY, $halfY));
            $this->distance = self::MAX_DIST;
        }

        $px = (self::FACTOR * $this->projection->x / $this->distance) + $size->width / 2;
        $py = (self::FACTOR * $this->projection->y / $this->distance) + $size->height / 2;

        if (($px <= 0) || ($px > $size->width) || ($py <= 0) || ($py > $size->height)) {
            $this->projection = new Point(mt_rand(-$halfX, $halfX), mt_rand(-$halfY, $halfY));
            $this->distance = self::MAX_DIST;

            return null;
        }

        $ratio = 1 - $this->distance / self::MAX_DIST;

        $this->width = $ratio * 3;
        $path->addRectangle(new Point($px, $py), new Size($this->width, $this->width));
        $path->end();

        return $path;
    }
}
