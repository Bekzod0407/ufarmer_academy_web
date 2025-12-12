<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => json_encode([
                    'en' => 'Fazliddin Ibragimov',
                    'tr' => 'Fazliddin İbragimov',
                    'uz' => 'Fazliddin Ibragimov'
                ]),
                'position' => json_encode([
                    'en' => 'Director',
                    'tr' => 'Direktör',
                    'uz' => 'Direktor'
                ]),
                'avatar' => '/images/testimonials/director.jpg',
                'content' => json_encode([
                    'en' => "Agriculture is not merely about cultivating the land; it is also a science and a way of life that shapes the future. As the UFARMER Training Center, we set out on this journey to nurture individuals who will carry the powerful potential of agriculture into the future.\n\nToday's agriculture must be supported not only by experience but also by technology and knowledge. That's why the greatest need of young agricultural engineers and farmers is a practical, innovative, and sustainable approach to education. UFARMER was established precisely to meet this need.\n\nEvery training we offer at our center aims to solve real problems encountered in the field, transform theoretical knowledge into practice, and add value to our participants. Our goal is not only to transfer knowledge but also to raise entrepreneurial, visionary, and productive agricultural professionals.\n\nFor a productive future in agriculture, we invite everyone who believes in education and collective production to join the UFARMER family.\n\nWith the hope of greening the future together through the power of the land.",
                    'tr' => "Tarım sadece toprağı işlemekle ilgili değildir; aynı zamanda geleceği şekillendiren bir bilim ve yaşam tarzıdır. UFARMER Eğitim Merkezi olarak, tarımın güçlü potansiyelini geleceğe taşıyacak bireyleri yetiştirmek için bu yolculuğa çıktık.\n\nGünümüz tarımı sadece deneyimle değil, aynı zamanda teknoloji ve bilgiyle desteklenmelidir. Bu yüzden genç ziraat mühendislerinin ve çiftçilerin en büyük ihtiyacı pratik, yenilikçi ve sürdürülebilir bir eğitim yaklaşımıdır. UFARMER tam da bu ihtiyacı karşılamak için kuruldu.\n\nMerkezimizde sunduğumuz her eğitim, sahada karşılaşılan gerçek sorunları çözmeyi, teorik bilgiyi pratiğe dönüştürmeyi ve katılımcılarımıza değer katmayı amaçlamaktadır. Amacımız sadece bilgi aktarmak değil, aynı zamanda girişimci, vizyoner ve üretken tarım profesyonelleri yetiştirmektir.\n\nTarımda verimli bir gelecek için, eğitime ve kolektif üretime inanan herkesi UFARMER ailesine katılmaya davet ediyoruz.\n\nToprağın gücüyle geleceği birlikte yeşertme umuduyla.",
                    'uz' => "Qishloq xo'jaligi faqat yerni ishlab chiqarish bilan bog'liq emas; bu kelajakni shakllantiruvchi fan va hayot tarzidir. UFARMER Ta'lim Markazi sifatida biz qishloq xo'jaligining kuchli salohiyatini kelajakga olib boruvchi shaxslarni tarbiyalash uchun ushbu yo'lga kirishdik.\n\nBugungi qishloq xo'jaligi nafaqat tajriba bilan, balki texnologiya va bilim bilan qo'llab-quvvatlanishi kerak. Shuning uchun yosh qishloq xo'jaligi muhandislari va fermerlarning eng katta ehtiyoji amaliy, innovatsion va barqaror ta'lim yondashuvidir. UFARMER aynan shu ehtiyojni qondirish uchun tashkil etilgan.\n\nMarkazimizda taklif etayotgan har bir ta'lim dalada uchraydigan haqiqiy muammolarni hal qilishni, nazariy bilimni amaliyotga aylantirishni va ishtirokchilarimizga qiymat qo'shishni maqsad qilgan. Bizning maqsadimiz nafaqat bilim berish, balki tadbirkor, istiqbolli va samarali qishloq xo'jaligi mutaxassislarini tarbiyalashdir.\n\nQishloq xo'jaligida samarali kelajak uchun ta'lim va jamoaviy ishlab chiqarishga ishonadigan barchani UFARMER oilasiga qo'shilishga taklif qilamiz.\n\nYer kuchi bilan kelajakni birga yashil qilish umidida."
                ]),
                'rating' => 5,
                'is_active' => true,
                'is_featured' => true,
                'order' => 1
            ],
            [
                'name' => json_encode([
                    'en' => 'Prof. Dr. Süleyman Kodal',
                    'tr' => 'Prof. Dr. Süleyman Kodal',
                    'uz' => 'Prof. Dr. Sulayman Kodal'
                ]),
                'position' => json_encode([
                    'en' => 'Academic Manager',
                    'tr' => 'Akademik Müdür',
                    'uz' => 'Akademik Menejer'
                ]),
                'avatar' => '/images/testimonials/academic-manager.jpg',
                'content' => json_encode([
                    'en' => "With the ever-changing global order and climate conditions, agriculture has become one of the most dynamic fields requiring continuous adaptation, knowledge, and technological innovation. Coping with this transformation is only possible through high-quality education and hands-on learning.\n\nAt the UFARMER Training Center, we prioritize both academic discipline and field experience in designing our educational programs. Our curricula are developed based on up-to-date scientific data, next-generation agricultural technologies, and methods actively used in the field.\n\nOur goal is not only to equip our participants with knowledge, but also to ensure they become individuals capable of applying that knowledge directly, analyzing situations, and producing effective solutions. In each training module, we focus on preparing our participants to become the agricultural professionals of tomorrow.\n\nAs the UFARMER family, we invite all dedicated engineers and producers to be part of this transformation. Let's learn, produce, and grow together.",
                    'tr' => "Sürekli değişen küresel düzen ve iklim koşullarıyla birlikte, tarım sürekli uyum, bilgi ve teknolojik yenilik gerektiren en dinamik alanlardan biri haline geldi. Bu dönüşümle başa çıkmak ancak kaliteli eğitim ve uygulamalı öğrenme ile mümkündür.\n\nUFARMER Eğitim Merkezi'nde, eğitim programlarımızı tasarlarken hem akademik disipline hem de saha deneyimine öncelik veriyoruz. Müfredatımız, güncel bilimsel verilere, yeni nesil tarım teknolojilerine ve sahada aktif olarak kullanılan yöntemlere dayalı olarak geliştirilmiştir.\n\nAmacımız sadece katılımcılarımızı bilgi ile donatmak değil, aynı zamanda bu bilgiyi doğrudan uygulayabilen, durumları analiz edebilen ve etkili çözümler üretebilen bireyler haline gelmelerini sağlamaktır. Her eğitim modülünde, katılımcılarımızı yarının tarım profesyonelleri olarak hazırlamaya odaklanıyoruz.\n\nUFARMER ailesi olarak, tüm özverili mühendisleri ve üreticileri bu dönüşümün bir parçası olmaya davet ediyoruz. Birlikte öğrenelim, üretelim ve büyüyelim.",
                    'uz' => "Doimiy o'zgaruvchan global tartib va iqlim sharoitlari bilan qishloq xo'jaligi doimiy moslashuv, bilim va texnologik innovatsiyani talab qiladigan eng dinamik sohalardan biriga aylandi. Ushbu o'zgarishlar bilan kurashish faqat yuqori sifatli ta'lim va amaliy o'rganish orqali mumkin.\n\nUFARMER Ta'lim Markazida biz ta'lim dasturlarimizni ishlab chiqishda ham akademik intizom, ham dala tajribasiga ustuvor ahamiyat beramiz. Bizning o'quv dasturlarimiz so'nggi ilmiy ma'lumotlar, yangi avlod qishloq xo'jaligi texnologiyalari va dalada faol qo'llaniladigan usullarga asoslanib ishlab chiqilgan.\n\nBizning maqsadimiz faqat ishtirokchilarimizni bilim bilan ta'minlash emas, balki ularni bu bilimni to'g'ridan-to'g'ri qo'llay oladigan, vaziyatlarni tahlil qila oladigan va samarali yechimlar ishlab chiqa oladigan shaxslarga aylantirishdir. Har bir ta'lim modulida biz ishtirokchilarimizni ertangi kun qishloq xo'jaligi mutaxassislari sifatida tayyorlashga e'tibor qaratamiz.\n\nUFARMER oilasi sifatida barcha sodiq muhandislar va ishlab chiqaruvchilarni ushbu o'zgarishlarning bir qismiga aylanishga taklif qilamiz. Keling, birga o'rganamiz, ishlab chiqaramiz va o'samiz."
                ]),
                'rating' => 5,
                'is_active' => true,
                'is_featured' => true,
                'order' => 2
            ],
        ];

        foreach ($testimonials as $testimonial) {
            DB::table('testimonials')->insert([
                'name' => $testimonial['name'],
                'position' => $testimonial['position'],
                'avatar' => $testimonial['avatar'],
                'content' => $testimonial['content'],
                'rating' => $testimonial['rating'],
                'is_active' => $testimonial['is_active'],
                'is_featured' => $testimonial['is_featured'],
                'order' => $testimonial['order'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
