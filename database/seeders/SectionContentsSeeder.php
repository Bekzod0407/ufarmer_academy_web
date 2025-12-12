<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionContentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get section IDs
        $heroSection = DB::table('sections')->where('name', 'hero')->first();
        $aboutSection = DB::table('sections')->where('name', 'about')->first();

        if ($heroSection) {
            $contents = [
                [
                    'section_id' => $heroSection->id,
                    'type' => 'button',
                    'key' => 'cta_primary',
                    'value' => json_encode([
                        'en' => 'Start Your Journey',
                        'tr' => 'Yolculuğunuza Başlayın',
                        'uz' => 'Boshlaymiz'
                    ]),
                    'order' => 1
                ],
                [
                    'section_id' => $heroSection->id,
                    'type' => 'image',
                    'key' => 'hero_image',
                    'value' => json_encode([
                        'url' => '/logo.png',
                        'alt' => 'UFarmer Logo'
                    ]),
                    'order' => 2
                ],
            ];

            foreach ($contents as $content) {
                DB::table('section_contents')->insert([
                    'section_id' => $content['section_id'],
                    'type' => $content['type'],
                    'key' => $content['key'],
                    'value' => $content['value'],
                    'order' => $content['order'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        if ($aboutSection) {
            $aboutContents = [
                [
                    'section_id' => $aboutSection->id,
                    'type' => 'text',
                    'key' => 'description',
                    'value' => json_encode([
                        'en' => 'UFARMER Academy is a modern training center offering practical education tailored to young agricultural engineers and farmers who will shape the future of the agricultural sector. With our highly experienced team of experts, we bridge theory and practice.',
                        'tr' => 'UFARMER, tarım sektörünün geleceğini şekillendirecek genç ziraat mühendisleri ve çiftçilere özel uygulamalı eğitimler sunan modern bir eğitim merkezidir. Sektör deneyimi yüksek uzman kadromuzla teori ve pratiği birleştiriyoruz.',
                        'uz' => 'UFARMER – qishloq xo\'jaligi sohasining kelajagini shakllantiradigan yosh agronomlar va dehqonlar uchun maxsus amaliy ta\'limlar taklif etuvchi zamonaviy ta\'lim markazidir. Yuqori soha tajribasiga ega mutaxassislarimiz bilan nazariya va amaliyotni uyg\'unlashtiramiz.'
                    ]),
                    'order' => 1
                ],
            ];

            foreach ($aboutContents as $content) {
                DB::table('section_contents')->insert([
                    'section_id' => $content['section_id'],
                    'type' => $content['type'],
                    'key' => $content['key'],
                    'value' => $content['value'],
                    'order' => $content['order'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
