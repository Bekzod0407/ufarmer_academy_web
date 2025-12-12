<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => json_encode([
                    'en' => 'Agricultural Consultancy Services',
                    'tr' => 'Tarımsal Danışmanlık Hizmetleri',
                    'uz' => 'Qishloq Xo\'jaligi Maslahat Xizmatlari'
                ]),
                'description' => json_encode([
                    'en' => "• Plant nutrition, irrigation, pesticide application, interpretation of soil analysis results\n• Consultancy for transitioning to organic farming\n• Applications for agricultural subsidies and grant projects",
                    'tr' => "• Bitki besleme, sulama, ilaçlama, toprak analizi sonuçlarının yorumlanması\n• Organik tarıma geçiş danışmanlığı\n• Tarım destekleri ve hibe projeleri başvuruları",
                    'uz' => "• O'simliklarni oziqlantirish, sug'orish, dorilash, tuproq tahlil natijalarini sharhlash\n• Organik qishloq xo'jaligiga o'tish bo'yicha maslahat\n• Qishloq xo'jaligi subsidiyalari va grant loyihalariga ariza topshirish"
                ]),
                'icon' => 'consultancy',
                'image' => '/images/services/consultancy.jpg',
                'is_active' => true,
                'order' => 1
            ],
            [
                'title' => json_encode([
                    'en' => 'Field and Crop Monitoring Systems',
                    'tr' => 'Tarla ve Ürün Takip Sistemleri',
                    'uz' => 'Dala va Mahsulot Kuzatuv Tizimlari'
                ]),
                'description' => json_encode([
                    'en' => "• Disease and yield prediction through remote sensing (drones, satellite data)\n• Smart farming solutions (sensor-assisted monitoring systems)\n• Installation of digital field recording systems",
                    'tr' => "• Uzaktan algılama (drone, uydu verileri) ile hastalık ve verim tahmini\n• Akıllı tarım çözümleri (sensör destekli izleme sistemleri)\n• Dijital tarla kayıt sistemi kurulumu",
                    'uz' => "• Uzoqdan kuzatish (dron, sun'iy yo'ldosh ma'lumotlari) orqali kasallik va hosildorlik prognozi\n• Aqlli qishloq xo'jaligi yechimlari (sensorli kuzatuv tizimlari)\n• Raqamli dala yozuvi tizimlarini yaratish"
                ]),
                'icon' => 'monitoring',
                'image' => '/images/services/monitoring.jpg',
                'is_active' => true,
                'order' => 2
            ],
            [
                'title' => json_encode([
                    'en' => 'R&D and Trial Fields',
                    'tr' => 'Ar-Ge ve Deneme Alanları',
                    'uz' => 'Ilmiy Tadqiqot va Sinov Maydonchalari'
                ]),
                'description' => json_encode([
                    'en' => "• Test areas for new seed varieties, fertilizers, or agricultural chemicals\n• Providing R&D support for companies\n• Collaborations with universities and private firms",
                    'tr' => "• Yeni tohum çeşitleri, gübreler veya zirai ilaçların denenmesi için test sahaları\n• Firmalara Ar-Ge desteği sağlama\n• Üniversiteler ve özel firmalarla işbirliği",
                    'uz' => "• Yangi urug' navlari, o'g'itlar yoki agroximik preparatlarni sinash uchun test maydonchalari\n• Kompaniyalarga ilmiy tadqiqot (R&D) yordami\n• Universitetlar va xususiy firmalar bilan hamkorlik"
                ]),
                'icon' => 'research',
                'image' => '/images/services/research.jpg',
                'is_active' => true,
                'order' => 3
            ],
            [
                'title' => json_encode([
                    'en' => 'Logistics and Marketing Support',
                    'tr' => 'Lojistik ve Pazarlama Desteği',
                    'uz' => 'Logistika va Marketing Yordami'
                ]),
                'description' => json_encode([
                    'en' => "• Consultancy on cold chain, packaging, and warehouse management\n• Product preparation for e-commerce, labeling, QR code systems\n• Consultancy for establishing cooperatives or producer associations",
                    'tr' => "• Soğuk zincir, paketleme, depo yönetimi danışmanlığı\n• E-ticaret için ürün hazırlama, etiketleme, QR kod sistemleri\n• Kooperatif ya da üretici birliği kurulumu danışmanlığı",
                    'uz' => "• Sovuq zanjir, qadoqlash, ombor boshqaruvi bo'yicha maslahatlar\n• E-tijorat uchun mahsulot tayyorlash, yorliqlash, QR kod tizimlari\n• Kooperativ yoki ishlab chiqaruvchi uyushmalari tuzish bo'yicha maslahat"
                ]),
                'icon' => 'logistics',
                'image' => '/images/services/logistics.jpg',
                'is_active' => true,
                'order' => 4
            ],
            [
                'title' => json_encode([
                    'en' => 'Workforce Training and Certification',
                    'tr' => 'İş Gücü Eğitimi ve Sertifikalandırma',
                    'uz' => 'Mehnat Ta\'limi va Sertifikatlash'
                ]),
                'description' => json_encode([
                    'en' => "• Certified training programs for agricultural workers (GAP, Good Agricultural Practices, etc.)\n• Specialized technical training for company employees",
                    'tr' => "• Tarım işçilerine yönelik sertifikalı eğitimler (GAP, İyi Tarım Uygulamaları vb.)\n• Firma çalışanlarına özel teknik eğitimler",
                    'uz' => "• Qishloq xo'jaligi ishchilari uchun sertifikatlangan ta'limlar (GAP, Yaxshi Qishloq Xo'jaligi Amaliyotlari va boshqalar)\n• Kompaniya xodimlariga maxsus texnik ta'limlar"
                ]),
                'icon' => 'training',
                'image' => '/images/services/training.jpg',
                'is_active' => true,
                'order' => 5
            ],
            [
                'title' => json_encode([
                    'en' => 'Financial and Legal Support',
                    'tr' => 'Finansal ve Hukuki Destek',
                    'uz' => 'Moliyaviy va Yuridik Yordam'
                ]),
                'description' => json_encode([
                    'en' => "• Agricultural insurance consultancy (TARSİM)\n• Contract farming legal consultancy\n• Preparation of cost analysis and profitability reports",
                    'tr' => "• Tarım sigortaları danışmanlığı (TARSİM)\n• Sözleşmeli üretim hukuku danışmanlığı\n• Maliyet analizi ve karlılık raporları hazırlanması",
                    'uz' => "• Qishloq xo'jaligi sug'urtasi (TARSİM) bo'yicha maslahat\n• Shartnomaviy ishlab chiqarish huquqi bo'yicha maslahat\n• Xarajat tahlili va foydalilik hisobotlarini tayyorlash"
                ]),
                'icon' => 'financial',
                'image' => '/images/services/financial.jpg',
                'is_active' => true,
                'order' => 6
            ],
            [
                'title' => json_encode([
                    'en' => 'International Connections',
                    'tr' => 'Uluslararası Bağlantılar',
                    'uz' => 'Xalqaro Aloqalar'
                ]),
                'description' => json_encode([
                    'en' => "• Export market research and consultancy\n• Preparation for international certifications such as Global GAP, ISO 22000",
                    'tr' => "• İhracat pazar araştırmaları ve danışmanlığı\n• Global GAP, ISO 22000 gibi uluslararası sertifikasyon hazırlıkları",
                    'uz' => "• Eksport bozorlarini tadqiq qilish va maslahatlar\n• Global GAP, ISO 22000 kabi xalqaro sertifikatlarga tayyorgarlik"
                ]),
                'icon' => 'international',
                'image' => '/images/services/international.jpg',
                'is_active' => true,
                'order' => 7
            ],
        ];

        foreach ($services as $service) {
            DB::table('services')->insert([
                'title' => $service['title'],
                'description' => $service['description'],
                'icon' => $service['icon'],
                'image' => $service['image'],
                'is_active' => $service['is_active'],
                'order' => $service['order'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
