<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CopyFacory>
 */
class CopyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => Book::all()->random()->book_id,
            //rand fg paraméterei közül a 2. jobbról nyitva értendő
            
            'hardcovered' => rand(0,2),
            'publication' => rand(1950,2024),
            'status' => rand(0,3),
            
        ];
    }
}
