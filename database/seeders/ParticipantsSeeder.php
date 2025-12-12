<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParticipantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $participants = [
            [
                'name' => json_encode([
                    'en' => 'Sarah Johnson',
                    'tr' => 'Sarah Johnson',
                    'uz' => 'Sara Jonson'
                ]),
                'organization' => json_encode([
                    'en' => 'Green Valley Farm',
                    'tr' => 'Yeşil Vadi Çiftliği',
                    'uz' => 'Yashil vodiy fermasi'
                ]),
                'photo' => '/images/participants/participant1.jpg',
                'bio' => json_encode([
                    'en' => 'Sustainable farming advocate with 10 years of experience',
                    'tr' => '10 yıllık deneyime sahip sürdürülebilir tarım savunucusu',
                    'uz' => '10 yillik tajribaga ega barqaror dehqonchilik tarafdori'
                ]),
                'country' => 'USA',
                'is_active' => true,
                'order' => 1
            ],
            [
                'name' => json_encode([
                    'en' => 'Dmitry Ivanov',
                    'tr' => 'Dmitry Ivanov',
                    'uz' => 'Dmitriy Ivanov'
                ]),
                'organization' => json_encode([
                    'en' => 'Siberian Organics',
                    'tr' => 'Sibirya Organik Ürünleri',
                    'uz' => 'Sibir organikasi'
                ]),
                'photo' => '/images/participants/participant2.jpg',
                'bio' => json_encode([
                    'en' => 'Pioneering organic farming in cold climates',
                    'tr' => 'Soğuk iklimlerde organik tarımda öncü',
                    'uz' => 'Sovuq iqlimda organik dehqonchilik kashshofi'
                ]),
                'country' => 'Russia',
                'is_active' => true,
                'order' => 2
            ],
            [
                'name' => json_encode([
                    'en' => 'Fatima Karimova',
                    'tr' => 'Fatima Karimova',
                    'uz' => 'Fotima Karimova'
                ]),
                'organization' => json_encode([
                    'en' => 'Silk Road Farms',
                    'tr' => 'İpek Yolu Çiftlikleri',
                    'uz' => 'Ipak yo\'li fermalari'
                ]),
                'photo' => '/images/participants/participant3.jpg',
                'bio' => json_encode([
                    'en' => 'Expert in traditional and modern farming techniques',
                    'tr' => 'Geleneksel ve modern tarım teknikleri uzmanı',
                    'uz' => 'An\'anaviy va zamonaviy dehqonchilik usullari bo\'yicha mutaxassis'
                ]),
                'country' => 'Uzbekistan',
                'is_active' => true,
                'order' => 3
            ],
            [
                'name' => json_encode([
                    'en' => 'Carlos Rodriguez',
                    'tr' => 'Carlos Rodriguez',
                    'uz' => 'Karlos Rodriges'
                ]),
                'organization' => json_encode([
                    'en' => 'Mediterranean Agriculture Co.',
                    'tr' => 'Akdeniz Tarım Şirketi',
                    'uz' => 'O\'rta er dengizi qishloq xo\'jaligi kompaniyasi'
                ]),
                'photo' => '/images/participants/participant4.jpg',
                'bio' => json_encode([
                    'en' => 'Specialist in sustainable irrigation systems',
                    'tr' => 'Sürdürülebilir sulama sistemleri uzmanı',
                    'uz' => 'Barqaror sug\'orish tizimlari bo\'yicha mutaxassis'
                ]),
                'country' => 'Spain',
                'is_active' => true,
                'order' => 4
            ],
        ];

        foreach ($participants as $participant) {
            DB::table('participants')->insert([
                'name' => $participant['name'],
                'organization' => $participant['organization'],
                'photo' => $participant['photo'],
                'bio' => $participant['bio'],
                'country' => $participant['country'],
                'is_active' => $participant['is_active'],
                'order' => $participant['order'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
