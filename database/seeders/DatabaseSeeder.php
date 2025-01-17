<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create(attributes: [
            'name' => 'Mizan',
            'username' => 'zanova',
            'email' => 'mizanganteng123@gmail.com',
        ]);

        $this->call(class: CategorySeeder::class);
        $this->call(class: PublisherSeeder::class);
    }
}
