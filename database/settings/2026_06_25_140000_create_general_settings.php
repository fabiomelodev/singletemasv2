<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration {
    public function up(): void
    {
        $this->migrator->add('general.whatsapp_number', '5511998043538');
    }

    public function down(): void
    {
        $this->migrator->deleteIfExists('general.whatsapp_number');
    }
};
