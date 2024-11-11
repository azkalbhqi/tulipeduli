<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $judul = $this->faker->unique()->sentence();
        $slug = Str::slug($judul);

        return [
            'judul'      => $judul,
            'konten'     => $this->faker->paragraphs(3, true),
            'slug'       => $slug,
            'penulis'    => User::factory(), // Creates a new user and sets it as the penulis
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
