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
                    'en' => 'Newly Graduated Agricultural Engineers',
                    'tr' => 'Yeni Mezun Ziraat Mühendisleri',
                    'uz' => 'Havaskor Yosh Agronomlar'
                ]),
                'organization' => json_encode([
                    'en' => 'Fresh Graduates',
                    'tr' => 'Yeni Mezunlar',
                    'uz' => 'Yangi Bitiruvchilar'
                ]),
                'photo' => '/images/participants/graduates.jpg',
                'bio' => json_encode([
                    'en' => 'Fresh graduates seeking practical experience and industry-ready skills to launch their agricultural careers.',
                    'tr' => 'Tarım kariyerlerini başlatmak için pratik deneyim ve sektöre hazır beceriler arayan yeni mezunlar.',
                    'uz' => 'Qishloq xo\'jaligi karerasini boshlash uchun amaliy tajriba va sohaga tayyor ko\'nikmalarni izlayotgan yangi bitiruvchilar.'
                ]),
                'country' => null,
                'is_active' => true,
                'order' => 1
            ],
            [
                'name' => json_encode([
                    'en' => 'Active Farmers',
                    'tr' => 'Aktif Çiftçiler',
                    'uz' => 'Faol Dehqonlar'
                ]),
                'organization' => json_encode([
                    'en' => 'Experienced Farmers',
                    'tr' => 'Deneyimli Çiftçiler',
                    'uz' => 'Tajribali Dehqonlar'
                ]),
                'photo' => '/images/participants/farmers.jpg',
                'bio' => json_encode([
                    'en' => 'Experienced farmers looking to modernize their practices and increase productivity with new techniques.',
                    'tr' => 'Uygulamalarını modernize etmek ve yeni tekniklerle verimliliği artırmak isteyen deneyimli çiftçiler.',
                    'uz' => 'O\'z amaliyotlarini modernizatsiya qilish va yangi texnikalar bilan samaradorlikni oshirishga intilayotgan tajribali dehqonlar.'
                ]),
                'country' => null,
                'is_active' => true,
                'order' => 2
            ],
            [
                'name' => json_encode([
                    'en' => 'Entrepreneurs Looking to Start a Business in Agriculture',
                    'tr' => 'Tarım Alanında İş Kurmak İsteyen Girişimciler',
                    'uz' => 'Qishloq Xo\'jaligida Biznes Boshlamoqchi Bo\'lgan Tadbirkorlar'
                ]),
                'organization' => json_encode([
                    'en' => 'Aspiring Entrepreneurs',
                    'tr' => 'Girişimciler',
                    'uz' => 'Tadbirkorlar'
                ]),
                'photo' => '/images/participants/entrepreneurs.jpg',
                'bio' => json_encode([
                    'en' => 'Business-minded individuals ready to venture into agricultural enterprises with proper training and guidance.',
                    'tr' => 'Doğru eğitim ve rehberlikle tarım işletmelerine girmeye hazır iş odaklı bireyler.',
                    'uz' => 'To\'g\'ri ta\'lim va yo\'l-yo\'riq bilan qishloq xo\'jaligi korxonalariga kirishga tayyor biznesga moyil shaxslar.'
                ]),
                'country' => null,
                'is_active' => true,
                'order' => 3
            ],
            [
                'name' => json_encode([
                    'en' => 'Anyone Interested in Agricultural Technologies',
                    'tr' => 'Tarım Teknolojilerine İlgi Duyan Herkes',
                    'uz' => 'Qishloq Xo\'jaligi Texnologiyalariga Qiziqqan Har Bir Kishi'
                ]),
                'organization' => json_encode([
                    'en' => 'Agricultural Enthusiasts',
                    'tr' => 'Tarım Meraklıları',
                    'uz' => 'Qishloq Xo\'jaligi Ishqibozlari'
                ]),
                'photo' => '/images/participants/enthusiasts.jpg',
                'bio' => json_encode([
                    'en' => 'Enthusiasts passionate about learning modern farming methods and contributing to sustainable agriculture.',
                    'tr' => 'Modern tarım yöntemlerini öğrenmeye ve sürdürülebilir tarıma katkıda bulunmaya tutkulu meraklılar.',
                    'uz' => 'Zamonaviy dehqonchilik usullarini o\'rganishga va barqaror qishloq xo\'jaligiga hissa qo\'shishga ishtiyoqli ishqibozlar.'
                ]),
                'country' => null,
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
