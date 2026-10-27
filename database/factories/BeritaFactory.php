<?php

namespace Database\Factories;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    //generate diluar return agar judul dan slug sama    
    $title = $this->faker->sentence(mt_rand(2, 8));
    return [
     //didalam ini yang akan dilakukan seeding atau fakernya
        'judul'   => $title,
        'slug'    => Str::slug($title),
        'penulis' => $this->faker->name(),
        'isi'     => $this->faker->paragraphs(mt_rand(3, 6), true),
    ];
    }
}