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
        Schema::create('user_admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 250)->nullable();
            $table->string('userName', 250)->nullable();
            $table->string('password', 500)->nullable();
            $table->string('level', 50)->nullable();
            $table->integer('admin')->nullable();
            $table->boolean('active')->default(false);
            $table->integer('ord')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_admin');
    }
};
