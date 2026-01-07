<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class PageHomeSettings extends Settings
{
    public string $banner_tag;

    public string $banner_title_first;

    public string $banner_title_second;

    public string $banner_description;

    public string $banner_image;

    public string $section_service_title;

    public string $section_service_description;

    public array $services;

    public array $cases;

    public string $website_section_title;

    public string $website_section_description;

    public array $website_steps;

    public static function group(): string
    {
        return 'groupPageHome';
    }
}
