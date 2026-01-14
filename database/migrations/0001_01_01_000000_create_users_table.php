<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('mobile')->unique();   
            $table->string('unique_id')->unique();
            $table->string('firstusername');
            $table->string('firstuserage');
            $table->string('secondusername');
            $table->string('seconduserage');
            $table->string('userimage');
            $table->string('address');
            $table->string('firstchildname');
            $table->string('firstchildage');
            $table->string('secondchildname');
            $table->string('secondchildage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
