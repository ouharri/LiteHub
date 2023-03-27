<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
//use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', static function (Blueprint $table) {
            $table->id();
            $table->string('first_name',20);
            $table->string('middle_name',20)->nullable();
            $table->string('last_name',20);
            $table->string('username',50)->unique();
            $table->string('email',60)->unique();
            $table->date('date_of_birth')->nullable();
            $table->string('phone_number',15)->unique()->nullable();
            $table->string('gender',10)->nullable();
            $table->string('about_me')->nullable();
            $table->string('avatar',150)->default('https://res.cloudinary.com/dggvib6ib/image/upload/v1679715870/blank-profile-picture-973460_1280_de4vlg.jpg');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',100);
            $table->rememberToken();
            $table->softDeletes();
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

