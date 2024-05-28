<?php

declare(strict_types=1);

namespace Ardillo\Examples\Dns;

use Ardillo\{
    Menu,
    ReactApp,
    TableModel,
    Size,
};
use React\Dns\Model\Message;

class App extends ReactApp
{
    public const QUERY_TYPES = [
        Message::TYPE_A => 'A',
        Message::TYPE_AAAA => 'AAAA',
        Message::TYPE_CNAME => 'CNAME',
        Message::TYPE_MX => 'MX',
        Message::TYPE_NS => 'NS',
        Message::TYPE_PTR => 'PTR',
        Message::TYPE_SOA => 'SOA',
        Message::TYPE_SRV => 'SRV',
        Message::TYPE_TXT => 'TXT',
    ];

    /** @var array<int, bool> */
    public array $querySelection = [
        Message::TYPE_A => true,
        Message::TYPE_AAAA => true,
        Message::TYPE_CNAME => true,
        Message::TYPE_MX => true,
        Message::TYPE_NS => true,
        Message::TYPE_PTR => true,
        Message::TYPE_SOA => true,
        Message::TYPE_SRV => true,
        Message::TYPE_TXT => true,
    ];

    public string $nameserver = '8.8.8.8';

    public Main\Window $win;
    public Prefs\Window $prefsWin;

    public Handler $handler;
    public TableModel $model;

    public function onShouldQuit(): bool
    {
        /* Manually unset the window so the Table object is destroyed before the TableModel */
        unset($this->win);

        return true;
    }

    public function onMenuItemClicked(int $id): void
    {
        switch ($id) {
            case 1:
                $path = $this->win->saveFile();

                if ($path) {
                    $this->handler->export($path);
                }
                break;

            case 3:
                if (!isset($this->prefsWin) || !$this->prefsWin->isValid()) {
                    $this->prefsWin = new Prefs\Window('DNS Preferences', new Size(300, 100), false);
                    $this->prefsWin->setup();
                }

                $this->prefsWin->show();
                break;

            case 4:
                $this->win->messageBox(
                    Main\Window::MESSAGE_BOX_DEFAULT, 'Ardillo DNS',
                    "DNS client built with Ardillo\nhttps://ardillo.org"
                );
                break;
        }
    }

    public function setupMenu(): void
    {
        $file = $this->appendMenu(null, Menu::Top, 0, 'File');
        $this->appendMenu($file, Menu::Item, 1, 'Export as CSV');
        $this->appendMenu($file, Menu::Quit, 2, null);
        $edit = $this->appendMenu(null, Menu::Top, 0, 'Edit');
        $this->appendMenu($edit, Menu::Preferences, 3, null);
        $help = $this->appendMenu(null, Menu::Top, 0, 'Help');
        $this->appendMenu($help, Menu::About, 4, null);
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

        $this->win = new Main\Window('Ardillo DNS', new Size(640, 480), true);
        $this->win->setup();
        $this->win->show();

        $this->loop->addSignal(self::SIGINT, $this->onSigInt(...));
    }
}
