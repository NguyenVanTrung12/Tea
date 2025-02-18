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
        Schema::create('new', function (Blueprint $table) {
            $table->increments('id'); // unsignedInteger
            $table->unsignedInteger('categoryId'); // Phải đồng bộ kiểu dữ liệu
            $table->string('name', 250)->nullable();
            $table->string('tag', 250)->nullable();
            $table->string('image', 500)->nullable();
            $table->dateTime('date')->nullable();
            $table->text('detail')->nullable();
            $table->text('content')->nullable();
            $table->string('title', 250)->nullable();
            $table->string('description', 250)->nullable();
            $table->integer('active')->nullable();
            $table->timestamps();
            $table->foreign('categoryId')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new');
    }
};
