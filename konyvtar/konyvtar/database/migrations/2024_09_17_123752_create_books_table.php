<?php

use App\Models\Book;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('author');
            $table->string('title');
            $table->integer('pieces');
            $table->timestamps();
        });

        Book::create([
            'author'=>'J. K. Rowling',
            'title'=>'Harry Potter and The Chamber of Secrets',
            'pieces'=>6,
        ]);
        Book::create([
            'author'=>'J. K. Rowling',
            'title'=>'Harry Potter and The Half Blood Prince',
            'pieces'=>4,
        ]);
        Book::create([
            'author'=>'J. K. Rowling',
            'title'=>'Harry Potter and The Prisoner of The Azkaban',
            'pieces'=>5,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
