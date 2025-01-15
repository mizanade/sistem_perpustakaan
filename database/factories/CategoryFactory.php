<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            'Fiksi',
            'Non-Fiksi',
            'Ilmu Pengetahuan',
            'Sejarah',
            'Biografi',
            'Anak-Anak',
            'Teknologi',
            'Fantasi',
            'Pengembangan Diri',
            'Misteri'
        ];
        $name = $this->faker->unique()->randomElement($categories);
        return [
            'name' => $name,
            'slug' => Str::slug($name) . '-' . Str::random(4),
        ];
    }
}
