<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            [
                'name' => 'hero',
                'title' => json_encode([
                    'en' => 'Cultivating Tomorrow\'s Farmers Today',
                    'tr' => 'Eğitimde Bilginin ve Deneyimin Gücü',
                    'uz' => 'Ta\'limda Bilim va Tajribaning Kuchli Uyg\'unligi'
                ]),
                'subtitle' => json_encode([
                    'en' => 'Empowering the next generation with sustainable practices, innovative techniques, and practical agricultural education that turns knowledge into action.',
                    'tr' => 'Yeni nesli sürdürülebilir uygulamalar, yenilikçi teknikler ve bilgiyi eyleme dönüştüren uygulamalı tarım eğitimiyle güçlendiriyoruz.',
                    'uz' => 'Barqaror amaliyotlar, innovatsion texnikalar va bilimni amalga aylantiradigan amaliy qishloq xo\'jaligi ta\'limi bilan yangi avlodni rivojlantirish.'
                ]),
                'background_image' => null,
                'background_color' => '#1f2e26',
                'text_color' => '#ffffff',
                'is_active' => true,
                'order' => 1
            ],
            [
                'name' => 'about',
                'title' => json_encode([
                    'en' => 'Who is UFARMER?',
                    'tr' => 'UFARMER Kimdir?',
                    'uz' => 'UFARMER KIM?'
                ]),
                'subtitle' => json_encode([
                    'en' => 'UFARMER Academy is a modern training center offering practical education tailored to young agricultural engineers and farmers who will shape the future of the agricultural sector.',
                    'tr' => 'UFARMER, tarım sektörünün geleceğini şekillendirecek genç ziraat mühendisleri ve çiftçilere özel uygulamalı eğitimler sunan modern bir eğitim merkezidir.',
                    'uz' => 'UFARMER – qishloq xo\'jaligi sohasining kelajagini shakllantiradigan yosh agronomlar va dehqonlar uchun maxsus amaliy ta\'limlar taklif etuvchi zamonaviy ta\'lim markazidir.'
                ]),
                'background_image' => null,
                'background_color' => null,
                'text_color' => null,
                'is_active' => true,
                'order' => 2
            ],
            [
                'name' => 'focus',
                'title' => json_encode([
                    'en' => 'Our Training Programs',
                    'tr' => 'Eğitim Programlarımız',
                    'uz' => 'Bizning Ta\'lim Dasturlarimiz'
                ]),
                'subtitle' => json_encode([
                    'en' => 'Explore our comprehensive programs designed to address every aspect of modern sustainable agriculture.',
                    'tr' => 'Modern sürdürülebilir tarımın her yönünü ele almak üzere tasarlanmış kapsamlı programlarımızı keşfedin.',
                    'uz' => 'Zamonaviy barqaror qishloq xo\'jaligining har bir jihatini qamrab olish uchun mo\'ljallangan keng qamrovli dasturlarimizni o\'rganing.'
                ]),
                'background_image' => null,
                'background_color' => null,
                'text_color' => null,
                'is_active' => true,
                'order' => 3
            ],
            [
                'name' => 'services',
                'title' => json_encode([
                    'en' => 'Our Other Services',
                    'tr' => 'Diğer Hizmetlerimiz',
                    'uz' => 'Boshqa Xizmatlarimiz'
                ]),
                'subtitle' => json_encode([
                    'en' => 'Comprehensive agricultural solutions tailored to your unique needs, from consultancy to international certifications.',
                    'tr' => 'Danışmanlıktan uluslararası sertifikalara kadar, benzersiz ihtiyaçlarınıza göre uyarlanmış kapsamlı tarımsal çözümler.',
                    'uz' => 'Maslahatdan tortib xalqaro sertifikatlargacha, sizning noyob ehtiyojlaringizga mo\'ljallangan keng qamrovli qishloq xo\'jaligi yechimlari.'
                ]),
                'background_image' => null,
                'background_color' => null,
                'text_color' => null,
                'is_active' => true,
                'order' => 4
            ],
            [
                'name' => 'participants',
                'title' => json_encode([
                    'en' => 'Who Can Participate?',
                    'tr' => 'Kimler Katılabilir?',
                    'uz' => 'Kimlar Qatnashishi Mumkin?'
                ]),
                'subtitle' => json_encode([
                    'en' => 'Our comprehensive training programs are designed for anyone passionate about agriculture, from aspiring engineers to experienced farmers looking to embrace modern techniques.',
                    'tr' => 'Kapsamlı eğitim programlarımız, tarıma tutkulu olan herkes için, hevesli mühendislerden modern teknikleri benimsemek isteyen deneyimli çiftçilere kadar tasarlanmıştır.',
                    'uz' => 'Bizning keng qamrovli ta\'lim dasturlarimiz qishloq xo\'jaligiga ishtiyoqli bo\'lgan har bir kishi, istiqbolli muhandislardan tortib zamonaviy texnikalarni qabul qilmoqchi bo\'lgan tajribali dehqonlargacha mo\'ljallangan.'
                ]),
                'background_image' => null,
                'background_color' => null,
                'text_color' => null,
                'is_active' => true,
                'order' => 5
            ],
            [
                'name' => 'partners',
                'title' => json_encode([
                    'en' => 'Our Partners',
                    'tr' => 'Bizim Ortaklarımız',
                    'uz' => 'Bizning Hamkorlarimiz'
                ]),
                'subtitle' => json_encode([
                    'en' => 'Working together for agriculture',
                    'tr' => 'Tarım için birlikte çalışıyoruz',
                    'uz' => 'Qishloq xo\'jaligi uchun birgalikda ishlaymiz'
                ]),
                'background_image' => null,
                'background_color' => null,
                'text_color' => null,
                'is_active' => true,
                'order' => 6
            ],
            [
                'name' => 'contact',
                'title' => json_encode([
                    'en' => 'Let\'s Grow Together',
                    'tr' => 'Hadi Birlikte Büyüyelim',
                    'uz' => 'Keling, Birga O\'saylik'
                ]),
                'subtitle' => json_encode([
                    'en' => 'Have questions about our programs? Want to partner with us? We\'d love to hear from you.',
                    'tr' => 'Programlarımız hakkında sorularınız mı var? Bizimle ortak olmak ister misiniz? Sizden haber almak isteriz.',
                    'uz' => 'Dasturlarimiz haqida savolaringiz bormi? Biz bilan hamkorlik qilmoqchimisiz? Sizdan eshitishdan xursand bo\'lamiz.'
                ]),
                'background_image' => null,
                'background_color' => null,
                'text_color' => null,
                'is_active' => true,
                'order' => 7
            ],
        ];

        foreach ($sections as $section) {
            DB::table('sections')->insert([
                'name' => $section['name'],
                'title' => $section['title'],
                'subtitle' => $section['subtitle'],
                'background_image' => $section['background_image'],
                'background_color' => $section['background_color'],
                'text_color' => $section['text_color'],
                'is_active' => $section['is_active'],
                'order' => $section['order'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
