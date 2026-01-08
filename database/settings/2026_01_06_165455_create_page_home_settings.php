<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration {
    public function up(): void
    {
        $this->migrator->add('groupPageHome.banner_tag', 'Soluções Digitais Para o Seu Negócio');
        $this->migrator->add('groupPageHome.banner_title_first', 'Transforme Sua Presença Online');
        $this->migrator->add('groupPageHome.banner_title_second', 'Com um Site Personalizado');
        $this->migrator->add('groupPageHome.banner_description', 'A Single Temas oferece tudo que o seu negócio precisa: site moderno, gestão de membros, agenda de eventos e pedidos de oração. Conecte-se no digital para continuar crescendo');
        $this->migrator->add('groupPageHome.banner_image', '');
        $this->migrator->add('groupPageHome.section_service_title', 'Nossos Serviços');
        $this->migrator->add('groupPageHome.section_service_description', 'Conheça todos os nossos serviços e o que oferemos de melhor');
        $this->migrator->add('groupPageHome.services', []);
        $this->migrator->add('groupPageHome.cases', [1, 2, 3, 4, 5, 6]);
        $this->migrator->add('groupPageHome.mode_section_title', 'Como Funciona Nosso Modelo de Trabalho');
        $this->migrator->add('groupPageHome.mode_section_description', 'Nosso modelo foi criado para oferecer clareza, qualidade e continuidade, garantindo que sua igreja tenha um site profissional hoje — e continue bem cuidada no futuro');
        $this->migrator->add('groupPageHome.mode_steps', []);
        $this->migrator->add('groupPageHome.mode_objectives', []);
    }
};
