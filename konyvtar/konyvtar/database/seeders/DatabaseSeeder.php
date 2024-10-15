<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Copy;
use App\Models\Lending;
use App\Models\User;
use Database\Factories\BookFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(69)->create();
        Book::factory(69)->create();
        Copy::factory(20)->create();
        Lending::factory(20)->create();
        

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
