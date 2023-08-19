<?php

declare(strict_types=1);

namespace Ardillo\Examples\Snake\Main;

use Ardillo\Examples\Snake\App;

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
    ExtKey,
    Point,
    Size,
};
use DateTimeImmutable;

/* An AreaHandler class implementing the snake game */
class Handler extends AreaHandler
{
    public const CELL_SIZE = 20;
    public const GAME_WIDTH = 30;
    public const GAME_HEIGHT = 30;
    public const GAME_AREA_WIDTH = self::CELL_SIZE * self::GAME_WIDTH;
    public const GAME_AREA_HEIGHT = self::CELL_SIZE * self::GAME_HEIGHT;

    /** @var list<Point> */
    private array $snake;
    private int $direction = 0;
    private Point $food;
    private bool $gameOver = true;

    public function dragBrokenHandler(Area $area): void
    {
    }

    public function drawHandler(Area $area, AreaDrawParams $params): void
    {
        assert($this->app instanceof App);

        if (!isset($this->snake)) {
            if ($this->gameOver) {
                return;
            }

            $this->snake = [
                new Point(self::GAME_AREA_WIDTH / 2, self::GAME_AREA_HEIGHT / 2),
                new Point(self::GAME_AREA_WIDTH / 2 - self::CELL_SIZE, self::GAME_AREA_HEIGHT / 2),
                new Point(self::GAME_AREA_WIDTH / 2 - 2 * self::CELL_SIZE, self::GAME_AREA_HEIGHT / 2),
            ];
        }

        if (!isset($this->food)) {
            $this->food = $this->generateFood();
        }

        $areaSize = $params->getAreaSize();

        // Clear the game board
        $this->app->win->brush->setColor(Color::fromRGB(0x000000));
        $path = new DrawPath(DrawFillMode::Winding);
        $path->addRectangle(new Point, $areaSize);
        $path->end();
        $params->fill($path, $this->app->win->brush);

        // Draw the snake
        foreach ($this->snake as $i => $point) {
            $this->app->win->brush->setColor($i === 0 ? Color::fromRGB(0x00ff00) : Color::fromRGB(0xffffff));

            $path = new DrawPath(DrawFillMode::Winding);
            $path->addRectangle($point, new Size(self::CELL_SIZE, self::CELL_SIZE));
            $path->end();
            $params->fill($path, $this->app->win->brush);
        }

        // Draw the food
        $this->app->win->brush->setColor(Color::fromRGB(0xff0000));
        $path = new DrawPath(DrawFillMode::Winding);
        $path->addRectangle($this->food, new Size(self::CELL_SIZE, self::CELL_SIZE));
        $path->end();
        $params->fill($path, $this->app->win->brush);

        if ($this->gameOver) {
            $this->app->win->setTitle('Game Over, press <space> to restart');

            unset($this->snake);
            unset($this->food);

            $this->direction = 0;
        }
    }

    public function keyEventHandler(Area $area, AreaKeyEvent $e): int
    {
        assert($this->app instanceof App);

        if ($this->gameOver) {
            if ($e->getKey() == 0x20) {
                $this->app->win->setTitle('Use the arrow keys to move');
                $this->gameOver = false;
            }

            return 0;
        }

        switch ($e->getExtKey()) {
            case ExtKey::Left:
                $this->direction = 2;
                break;
            case ExtKey::Up:
                $this->direction = 3;
                break;
            case ExtKey::Right:
                $this->direction = 0;
                break;
            case ExtKey::Down:
                $this->direction = 1;
                break;
        }

        return 0;
    }

    public function mouseCrossedHandler(Area $area, int $left): void
    {
    }

    public function mouseEventHandler(Area $area, AreaMouseEvent $e): void
    {
    }

    public function moveSnake(): void
    {
        if ($this->gameOver || !isset($this->snake)) {
            return;
        }

        $head = $this->snake[0];

        switch ($this->direction) {
            case 0:
                $newHead = new Point($head->x + self::CELL_SIZE, $head->y);
                break;
            case 1:
                $newHead = new Point($head->x, $head->y + self::CELL_SIZE);
                break;
            case 2:
                $newHead = new Point($head->x - self::CELL_SIZE, $head->y);
                break;
            case 3:
                $newHead = new Point($head->x, $head->y - self::CELL_SIZE);
                break;
        }

        assert(isset($newHead));
        /** @phpstan-ignore-next-line */
        assert($newHead instanceof Point);

        array_unshift($this->snake, $newHead);

        if (($newHead->x === $this->food->x) && $newHead->y === $this->food->y) {
            $this->food = $this->generateFood();
        } else {
            array_pop($this->snake);
        }

        // Check for collision with walls
        if (
            $newHead->x < 0 ||
            $newHead->x >= self::GAME_AREA_WIDTH ||
            $newHead->y < 0 ||
            $newHead->y >= self::GAME_AREA_HEIGHT
        ) {
            $this->gameOver = true;
        }

        // Check for collision with self
        for ($i = 1; $i < count($this->snake); $i++) {
            if (($newHead->x === $this->snake[$i]->x) && ($newHead->y === $this->snake[$i]->y)) {
                $this->gameOver = true;
                break;
            }
        }
    }

    private function generateFood(): Point
    {
        do {
            $food = new Point(
                rand(0, self::GAME_WIDTH - 1) * self::CELL_SIZE,
                rand(0, self::GAME_HEIGHT - 1) * self::CELL_SIZE
            );
        } while (in_array($food, $this->snake));

        return $food;
    }
}
