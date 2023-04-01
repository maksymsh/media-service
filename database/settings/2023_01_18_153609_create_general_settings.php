<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.app_name', '<span>Aвтоматизація</span> <br/>компаній <br/>та підприємств Service');
        $this->migrator->add('general.app_description', 'Ми допомагаємо клієнтам максимально оптимізувати роботу підприємства та ефективно управляти бізнесом');
        $this->migrator->add('general.app_active', true);

        $this->migrator->add('general.info_email', 'info@medias.com.ua');
        $this->migrator->add('general.sales_phone', '(032) 242-07-27');
        $this->migrator->add('general.sales_email', 'sales@medias.com.ua');
        $this->migrator->add('general.accounting_phone', '(032) 242-07-27');
        $this->migrator->add('general.support_email', 'support@medias.com.ua');
        $this->migrator->add('general.support_phone', '(032) 242-42-43');
        $this->migrator->add('general.support_phone2', '(032) 240-00-36');
        $this->migrator->add('general.support_phone3', '(067) 671-24-47');
        $this->migrator->add('general.support_phone4', '(050) 376-74-99');
        $this->migrator->add('general.web_email', 'web@medias.com.ua');
        $this->migrator->add('general.partners_email', 'partners@medias.com.ua');
        $this->migrator->add('general.hr_email', 'hr@medias.com.ua');
        $this->migrator->add('general.hotline_email', 'hotline@medias.com.ua');
        $this->migrator->add('general.cso_email', 'cso@medias.com.ua');
        $this->migrator->add('general.address', 'м. Львів, вул. Наукова, 7а <br/>(3й поверх)');
        $this->migrator->add('general.schedule', 'Пн.-Пт. з 9:30 до 18:00 <br/>(крім святкових днів)');

        $this->migrator->add('general.telegram', '');
        $this->migrator->add('general.viber', '');
        $this->migrator->add('general.facebook', '');
        $this->migrator->add('general.instagram', '');
        $this->migrator->add('general.youtube', '');
        $this->migrator->add('general.linkedin', '');
    }
}
