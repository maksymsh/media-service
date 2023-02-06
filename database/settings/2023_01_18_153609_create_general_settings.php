<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.app_name', '<span>Aвтоматизація</span> <br/>компаній <br/>та підприємств Service');
        $this->migrator->add('general.app_description', 'Ми допомагаємо клієнтам максимально оптимізувати роботу підприємства та ефективно управляти бізнесом');
        $this->migrator->add('general.app_active', true);
    }
}
