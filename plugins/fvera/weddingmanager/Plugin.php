<?php namespace Fvera\WeddingManager;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Wedding Manager',
                'description' => 'Configuraciones del sitio de la boda',
                'category'    => 'Wedding',
                'icon'        => 'icon-globe',  
                'order'       => 1,
                'keywords'    => 'wedding manager',
                'class'       => Models\Settings::class,
                'permissions' => ['fvera.weddingmanager.manage_categories'],
            ]
        ];
    }
}
