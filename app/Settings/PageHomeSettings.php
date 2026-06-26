<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class PageHomeSettings extends Settings
{
    public string $banner_tag;

    public string $banner_title_first;

    public string $banner_title_second;

    public string $banner_description;

    public ?string $banner_image;

    public string $section_service_title;

    public string $section_service_description;

    public array $services;

    public array $cases;

    public string $mode_section_title;

    public string $mode_section_description;

    public array $mode_steps;

    public array $mode_objectives;

    // Barra de estatísticas / números
    public array $stats;

    // Visibilidade de seções
    public bool $show_testimonials;

    // Seção de Valores (projetos / pagamento único)
    public string $prices_section_title;

    public string $prices_section_description;

    public array $prices;

    // Seção de Planos de Continuidade (mensais)
    public string $continuity_section_title;

    public string $continuity_section_description;

    public array $continuity_plans;

    public string $continuity_notice_title;

    public string $continuity_notice_text;

    public static function group(): string
    {
        return 'groupPageHome';
    }
}
