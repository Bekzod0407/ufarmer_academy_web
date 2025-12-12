<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@ufarmer.uz',
        ]);

        // Seed all tables
        $this->call([
            SiteSettingsSeeder::class,
            SectionsSeeder::class,
            SectionContentsSeeder::class,
            PartnersSeeder::class,
            ServicesSeeder::class,
            TestimonialsSeeder::class,
            ParticipantsSeeder::class,
        ]);
    }
}
