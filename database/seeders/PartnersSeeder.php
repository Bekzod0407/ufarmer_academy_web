<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partners = [
            [
                'name' => json_encode([
                    'en' => 'Agricultural University',
                    'tr' => 'Tarım Üniversitesi',
                    'uz' => 'Qishloq xo\'jaligi universiteti'
                ]),
                'logo' => '/images/partners/partner1.png',
                'website_url' => 'https://example.com',
                'description' => json_encode([
                    'en' => 'Leading agricultural education institution',
                    'tr' => 'Önde gelen tarım eğitim kurumu',
                    'uz' => 'Qishloq xo\'jaligi bo\'yicha yetakchi ta\'lim muassasasi'
                ]),
                'is_active' => true,
                'order' => 1
            ],
            [
                'name' => json_encode([
                    'en' => 'Farmers Association',
                    'tr' => 'Çiftçiler Derneği',
                    'uz' => 'Fermerlar uyushmasi'
                ]),
                'logo' => '/images/partners/partner2.png',
                'website_url' => 'https://example.com',
                'description' => json_encode([
                    'en' => 'Supporting farmers nationwide',
                    'tr' => 'Ülke genelindeki çiftçileri destekleme',
                    'uz' => 'Butun mamlakat bo\'ylab fermerlarni qo\'llab-quvvatlash'
                ]),
                'is_active' => true,
                'order' => 2
            ],
            [
                'name' => json_encode([
                    'en' => 'Ministry of Agriculture',
                    'tr' => 'Tarım Bakanlığı',
                    'uz' => 'Qishloq xo\'jaligi vazirligi'
                ]),
                'logo' => '/images/partners/partner3.png',
                'website_url' => 'https://example.com',
                'description' => json_encode([
                    'en' => 'Government agricultural department',
                    'tr' => 'Devlet tarım departmanı',
                    'uz' => 'Davlat qishloq xo\'jaligi departamenti'
                ]),
                'is_active' => true,
                'order' => 3
            ],
            [
                'name' => json_encode([
                    'en' => 'Tech Agro Solutions',
                    'tr' => 'Teknoloji Tarım Çözümleri',
                    'uz' => 'Texnologik agro yechimlari'
                ]),
                'logo' => '/images/partners/partner4.png',
                'website_url' => 'https://example.com',
                'description' => json_encode([
                    'en' => 'Innovative farming technology',
                    'tr' => 'Yenilikçi tarım teknolojisi',
                    'uz' => 'Innovatsion dehqonchilik texnologiyalari'
                ]),
                'is_active' => true,
                'order' => 4
            ],
            [
                'name' => json_encode([
                    'en' => 'Rural Development Fund',
                    'tr' => 'Kırsal Kalkınma Fonu',
                    'uz' => 'Qishloqni rivojlantirish fondi'
                ]),
                'logo' => '/images/partners/partner5.png',
                'website_url' => 'https://example.com',
                'description' => json_encode([
                    'en' => 'Financial support for farmers',
                    'tr' => 'Çiftçilere mali destek',
                    'uz' => 'Fermerlarga moliyaviy yordam'
                ]),
                'is_active' => true,
                'order' => 5
            ],
            [
                'name' => json_encode([
                    'en' => 'Organic Farming Alliance',
                    'tr' => 'Organik Tarım İttifakı',
                    'uz' => 'Organik dehqonchilik ittifoqi'
                ]),
                'logo' => '/images/partners/partner6.png',
                'website_url' => 'https://example.com',
                'description' => json_encode([
                    'en' => 'Promoting sustainable agriculture',
                    'tr' => 'Sürdürülebilir tarımı teşvik etmek',
                    'uz' => 'Barqaror qishloq xo\'jaligini rivojlantirish'
                ]),
                'is_active' => true,
                'order' => 6
            ],
        ];

        foreach ($partners as $partner) {
            DB::table('partners')->insert([
                'name' => $partner['name'],
                'logo' => $partner['logo'],
                'website_url' => $partner['website_url'],
                'description' => $partner['description'],
                'is_active' => $partner['is_active'],
                'order' => $partner['order'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
