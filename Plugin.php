<?php

namespace PlugNPlay\Plugins\DBUI;

use PlugNPlay\Contracts\PluginInterface;
use PlugNPlay\Plugin as Base;

class Plugin extends Base implements PluginInterface
{
    public function getName(): string
    {
        return 'DBUI';
    }

    public function getParentPlugin(): ?array
    {
        return [
            //
        ];
    }

    public function getRoutes()
    {
        return __DIR__.'/routes.php';
    }

    public function getViews()
    {
        return __DIR__.'/resources/views';
    }

    public function getLang()
    {
        return __DIR__.'/resources/lang';
    }

    public function getConfig()
    {
        return __DIR__.'/config.php';
    }

    public function getMenuItems()
    {
        return [
            'label' => 'DBUI',
            'route' => url('plug-n-play/dbui'),
            'menus' => [
                [
                    'label' => 'Create',
                    'route' => url('plug-n-play/users/create'),
                ],
                [
                    'label' => 'Create',
                    'route' => url('plug-n-play/users/create'),
                ],
            ],
        ];
    }
}
