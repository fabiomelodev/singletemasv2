<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration {
    public function up(): void
    {
        $this->migrator->add('groupPageHome.stats', [
            ['value' => '+30', 'label' => 'Projetos entregues', 'icon' => 'rocket'],
            ['value' => '20–30', 'label' => 'Dias para publicar', 'icon' => 'clock'],
            ['value' => '3 meses', 'label' => 'Garantia e suporte', 'icon' => 'shield'],
            ['value' => '100%', 'label' => 'Sites responsivos', 'icon' => 'monitor'],
        ]);
    }

    public function down(): void
    {
        $this->migrator->deleteIfExists('groupPageHome.stats');
    }
};
