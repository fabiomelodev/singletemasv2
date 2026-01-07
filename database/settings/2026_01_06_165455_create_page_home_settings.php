<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration {
    public function up(): void
    {
        $this->migrator->add('groupPageHome.banner_tag', '');
        $this->migrator->add('groupPageHome.banner_title_first', '');
        $this->migrator->add('groupPageHome.banner_title_second', '');
        $this->migrator->add('groupPageHome.banner_description', '');
        $this->migrator->add('groupPageHome.banner_image', '');
        $this->migrator->add('groupPageHome.section_service_title', '');
        $this->migrator->add('groupPageHome.section_service_description', '');
        $this->migrator->add('groupPageHome.services', []);
        $this->migrator->add('groupPageHome.cases', []);
        $this->migrator->add('groupPageHome.website_section_title', '');
        $this->migrator->add('groupPageHome.website_section_description', '');
        $this->migrator->add('groupPageHome.website_steps', []);
    }
};
