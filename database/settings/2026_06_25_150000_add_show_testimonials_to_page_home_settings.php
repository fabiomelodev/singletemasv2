<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration {
    public function up(): void
    {
        $this->migrator->add('groupPageHome.show_testimonials', true);
    }

    public function down(): void
    {
        $this->migrator->deleteIfExists('groupPageHome.show_testimonials');
    }
};
