<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // Appearance Settings
            ['key' => 'site_logo', 'value' => '/logo.png', 'type' => 'image', 'group' => 'appearance', 'description' => 'Main site logo'],
            ['key' => 'site_favicon', 'value' => '/favicon.ico', 'type' => 'image', 'group' => 'appearance', 'description' => 'Site favicon'],
            ['key' => 'primary_color', 'value' => '#4ade80', 'type' => 'color', 'group' => 'appearance', 'description' => 'Primary brand color'],
            ['key' => 'secondary_color', 'value' => '#86efac', 'type' => 'color', 'group' => 'appearance', 'description' => 'Secondary brand color'],
            ['key' => 'accent_color', 'value' => '#eab308', 'type' => 'color', 'group' => 'appearance', 'description' => 'Accent color'],
            ['key' => 'font_family', 'value' => 'Inter, sans-serif', 'type' => 'text', 'group' => 'appearance', 'description' => 'Primary font family'],
            ['key' => 'heading_font_family', 'value' => 'Poppins, sans-serif', 'type' => 'text', 'group' => 'appearance', 'description' => 'Heading font family'],

            // Contact Settings
            ['key' => 'contact_email', 'value' => 'info@ufarmer.uz', 'type' => 'text', 'group' => 'contact', 'description' => 'Contact email address'],
            ['key' => 'contact_phone', 'value' => '+998 71 123 45 67', 'type' => 'text', 'group' => 'contact', 'description' => 'Contact phone number'],
            ['key' => 'contact_address', 'value' => 'Tashkent, Uzbekistan', 'type' => 'text', 'group' => 'contact', 'description' => 'Physical address'],

            // Social Media
            ['key' => 'facebook_url', 'value' => 'https://facebook.com/ufarmer', 'type' => 'text', 'group' => 'social', 'description' => 'Facebook page URL'],
            ['key' => 'twitter_url', 'value' => 'https://twitter.com/ufarmer', 'type' => 'text', 'group' => 'social', 'description' => 'Twitter profile URL'],
            ['key' => 'instagram_url', 'value' => 'https://instagram.com/ufarmer', 'type' => 'text', 'group' => 'social', 'description' => 'Instagram profile URL'],
            ['key' => 'linkedin_url', 'value' => 'https://linkedin.com/company/ufarmer', 'type' => 'text', 'group' => 'social', 'description' => 'LinkedIn company URL'],

            // SEO Settings
            ['key' => 'meta_title', 'value' => 'UFarmer - Empowering Farmers', 'type' => 'text', 'group' => 'seo', 'description' => 'Default meta title'],
            ['key' => 'meta_description', 'value' => 'UFarmer provides education and resources for modern farmers', 'type' => 'text', 'group' => 'seo', 'description' => 'Default meta description'],
            ['key' => 'google_analytics_id', 'value' => '', 'type' => 'text', 'group' => 'seo', 'description' => 'Google Analytics tracking ID'],
        ];

        foreach ($settings as $setting) {
            DB::table('site_settings')->insert([
                'key' => $setting['key'],
                'value' => $setting['value'],
                'type' => $setting['type'],
                'group' => $setting['group'],
                'description' => $setting['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
