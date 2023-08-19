<?php

declare(strict_types=1);

namespace Ardillo\Examples\CsvEdit;

use Ardillo\{
    Menu,
    ReactApp,
    Size,
    TableModel,
};
use React\Dns\Model\Message;

class App extends ReactApp
{
    public Main\Window $win;

    public Handler $handler;
    public TableModel $model;

    public string $lastPath;

    public function onMenuItemClicked(int $id): void
    {
        switch ($id) {
            case 1:
                $path = $this->win->openFile();

                if ($path) {
                    $this->handler->import($path);
                }
                break;

            case 2:
                if (!isset($this->lastPath)) {
                    $this->win->messageBox(
                        Main\Window::MESSAGE_BOX_ERROR, 'Cannot save',
                        'Open a file before attempting to save data'
                    );
                    break;
                }

                $path = $this->lastPath;

            case 3:
                if (!isset($path)) {
                    $path = $this->win->saveFile();

                    if (is_null($path)) {
                        break;
                    }
                }

                $this->handler->export($path);
                break;

            case 5:
                $this->win->messageBox(
                    Main\Window::MESSAGE_BOX_DEFAULT, 'Ardillo CSV Editor',
                    "CSV editor built with Ardillo\nhttps://ardillo.org"
                );
                break;
        }
    }

    public function setupMenu(): void
    {
        $file = $this->appendMenu(null, Menu::Top, 0, 'File');
        $this->appendMenu($file, Menu::Item, 1, 'Open');
        $this->appendMenu($file, Menu::Item, 2, 'Save');
        $this->appendMenu($file, Menu::Item, 3, 'Save As...');
        $this->appendMenu($file, Menu::Quit, 4, null);
        $help = $this->appendMenu(null, Menu::Top, 0, 'Help');
        $this->appendMenu($help, Menu::About, 5, null);
    }

    public function onSigInt(int $signo): void
    {
        echo 'Caught SIGINT ...' . PHP_EOL;

        unset($this->win);
        $this->stop();
    }

    protected function OnInit(): void
    {
        $this->setupMenu();

        $this->handler = new Handler;
        $this->model = new TableModel($this->handler);

        $this->win = new Main\Window('Ardillo CSV Editor', new Size(640, 480), true);
        $this->win->setup();
        $this->win->show();

        $options = getopt('f:', ['file:']);

        if (isset($options['f']) || isset($options['file'])) {
            $file = isset($options['f']) ? $options['f'] : $options['file'];

            if (is_string($file)) {
                $this->handler->import($file);
            }
        }

        $this->loop->addSignal(self::SIGINT, $this->onSigInt(...));
    }
}
