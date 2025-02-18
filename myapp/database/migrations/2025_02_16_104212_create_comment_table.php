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
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('id'); // unsignedInteger
            $table->unsignedInteger('newId'); // Phải đồng bộ kiểu dữ liệu
            $table->foreign('newId')->references('id')->on('new');
            $table->string('name', 250)->nullable();
            $table->string('email', 250)->nullable();
            $table->text('comment')->nullable();
            $table->dateTime('date')->nullable();
            $table->integer('rate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
    }
};
