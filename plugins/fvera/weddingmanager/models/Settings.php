<?php namespace Fvera\WeddingManager\Models;

use Model;
use BackendMenu;
use System\Classes\SettingsManager;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'fvera_weddingmanager_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    public function __construct()
    {
        parent::__construct();
    
    
        BackendMenu::setContext('Winter.System', 'system', 'settings');
        SettingsManager::setContext('fvera.weddingmanager', 'settings');
    }

}