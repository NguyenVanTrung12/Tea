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
        Schema::create('confix', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mail1', 250)->nullable();
            $table->string('contact', 250)->nullable();
            $table->string('title', 250)->nullable();
            $table->string('description', 250)->nullable();
            $table->string('lang', 50)->nullable();
            $table->integer('hotline')->nullable();
            $table->string('address', 250)->nullable();
            $table->string('link1', 250)->nullable();
            $table->string('link2', 250)->nullable();
            $table->string('keyword', 250)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('confix');
    }
};
