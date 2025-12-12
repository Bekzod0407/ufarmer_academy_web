<?php

use App\Models\Section;
use App\Models\SiteSetting;

if (!function_exists('get_section')) {
    /**
     * Get section by name
     *
     * @param string $name
     * @return Section|null
     */
    function get_section(string $name): ?Section
    {
        return Section::where('name', $name)->with('contents')->first();
    }
}

if (!function_exists('get_section_title')) {
    /**
     * Get localized section title
     *
     * @param string $name
     * @param string|null $locale
     * @return string|null
     */
    function get_section_title(string $name, ?string $locale = null): ?string
    {
        $section = get_section($name);
        return $section ? $section->getTitle($locale) : null;
    }
}

if (!function_exists('get_section_subtitle')) {
    /**
     * Get localized section subtitle
     *
     * @param string $name
     * @param string|null $locale
     * @return string|null
     */
    function get_section_subtitle(string $name, ?string $locale = null): ?string
    {
        $section = get_section($name);
        return $section ? $section->getSubtitle($locale) : null;
    }
}

if (!function_exists('get_setting')) {
    /**
     * Get site setting value by key
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    function get_setting(string $key, $default = null)
    {
        return SiteSetting::getValue($key, $default);
    }
}

if (!function_exists('current_locale')) {
    /**
     * Get current application locale
     *
     * @return string
     */
    function current_locale(): string
    {
        return session('locale', config('app.locale', 'en'));
    }
}
