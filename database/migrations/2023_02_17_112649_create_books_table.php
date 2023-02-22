<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('cover');
            $table->integer('pages');
            $table->string('edition');
            $table->string('language');
            $table->string('description');
            $table->date('publisher_date');
            $table->string('isbn')->unique();
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('publisher_id');
            $table->unsignedBigInteger('category_id');
            $table->boolean('is_archived')->default(false);
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('publisher_id')->references('id')->on('publishers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
