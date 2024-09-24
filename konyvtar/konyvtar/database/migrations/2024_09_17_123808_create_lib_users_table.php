<?php

use App\Models\LibUser;
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
        Schema::create('lib_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });

        LibUser::create([
            'name'=>'Orsi',
            'email'=>'orsi@exmaple.com'
        ]);
        LibUser::create([
            'name'=>'Viki',
            'email'=>'viki@exmaple.com'
        ]);
        LibUser::create([
            'name'=>'Sella',
            'email'=>'sella@exmaple.com'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lib_users');
    }
};
