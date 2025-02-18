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
        Schema::create('advertise', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 250)->nullable();
            $table->text('image')->nullable();
            $table->string('target', 250)->nullable();
            $table->text('content')->nullable();
            $table->integer('position')->nullable();
            $table->integer('ord')->nullable();
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
        Schema::dropIfExists('advertise');
    }
};
