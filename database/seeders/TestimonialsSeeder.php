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
                    'en' => 'John Smith',
                    'tr' => 'John Smith',
                    'uz' => 'Jon Smit'
                ]),
                'position' => json_encode([
                    'en' => 'Organic Farmer',
                    'tr' => 'Organik Çiftçi',
                    'uz' => 'Organik fermer'
                ]),
                'avatar' => '/images/testimonials/avatar1.jpg',
                'content' => json_encode([
                    'en' => 'UFarmer has transformed the way I approach farming. The training programs are excellent and very practical.',
                    'tr' => 'UFarmer tarıma yaklaşımımı değiştirdi. Eğitim programları mükemmel ve çok pratik.',
                    'uz' => 'UFarmer mening dehqonchilikka yondashuvimni o\'zgartirdi. O\'quv dasturlari ajoyib va juda amaliydir.'
                ]),
                'rating' => 5,
                'is_active' => true,
                'is_featured' => true,
                'order' => 1
            ],
            [
                'name' => json_encode([
                    'en' => 'Maria Garcia',
                    'tr' => 'Maria Garcia',
                    'uz' => 'Mariya Garsiya'
                ]),
                'position' => json_encode([
                    'en' => 'Vegetable Farmer',
                    'tr' => 'Sebze Çiftçisi',
                    'uz' => 'Sabzavotchilik fermeri'
                ]),
                'avatar' => '/images/testimonials/avatar2.jpg',
                'content' => json_encode([
                    'en' => 'The expert consultation service helped me increase my yield by 40%. Highly recommended!',
                    'tr' => 'Uzman danışmanlık hizmeti verimimi %40 artırmama yardımcı oldu. Şiddetle tavsiye ediyorum!',
                    'uz' => 'Mutaxassis maslahat xizmati hosildorligimni 40% ga oshirishga yordam berdi. Tavsiya qilaman!'
                ]),
                'rating' => 5,
                'is_active' => true,
                'is_featured' => true,
                'order' => 2
            ],
            [
                'name' => json_encode([
                    'en' => 'Ahmed Hassan',
                    'tr' => 'Ahmed Hassan',
                    'uz' => 'Axmad Hasan'
                ]),
                'position' => json_encode([
                    'en' => 'Dairy Farmer',
                    'tr' => 'Süt Çiftçisi',
                    'uz' => 'Sut fermeri'
                ]),
                'avatar' => '/images/testimonials/avatar3.jpg',
                'content' => json_encode([
                    'en' => 'Being part of this community has been invaluable. I learned so much from fellow farmers.',
                    'tr' => 'Bu topluluğun bir parçası olmak çok değerliydi. Diğer çiftçilerden çok şey öğrendim.',
                    'uz' => 'Ushbu hamjamiyatning bir qismi bo\'lish juda qimmatli bo\'ldi. Men boshqa fermerlardan juda ko\'p narsani o\'rgandim.'
                ]),
                'rating' => 5,
                'is_active' => true,
                'is_featured' => false,
                'order' => 3
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
