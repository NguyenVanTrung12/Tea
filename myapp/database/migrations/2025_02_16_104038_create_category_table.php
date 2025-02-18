<?php

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
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 250)->nullable();
            $table->integer('level')->nullable();
            $table->string('title', 250)->nullable();
            $table->text('description')->nullable();
            $table->string('keyword', 250)->nullable();
            $table->integer('ord')->nullable();
            $table->string('image', 250)->nullable();
            $table->integer('index')->nullable();
            $table->boolean('active')->default(false);
            $table->integer('lang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category');
    }
};
