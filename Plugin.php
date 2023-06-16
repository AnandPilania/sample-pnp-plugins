<?php

namespace PlugNPlay\Plugins\Sentry;

use PlugNPlay\Contracts\PluginInterface;
use PlugNPlay\Plugin as Base;

class Plugin extends Base implements PluginInterface
{
    public function getName(): string
    {
        return 'Sentry';
    }

    public function getParentPlugin(): ?array
    {
        return [
            'User',
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
            'label' => 'Sentry',
            'route' => url('plug-n-play/sentry'),
        ];
    }
}
