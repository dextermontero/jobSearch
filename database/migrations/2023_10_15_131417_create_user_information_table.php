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
        Schema::create('user_information', function (Blueprint $table) {
            $table->id();
            $table->integer('uid')->unsigned();
            $table->foreign('uid')->references('id')->on('users');
            $table->string('img_profile')->default('user_default.png');
            $table->string('firstname', '50');
            $table->string('lastname', '50');
            $table->string('email');
            $table->string('phone_number', '15')->nullable();
            $table->text('address')->nullable();
            $table->timestamps();
            $table->integer('archive')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_information');
    }
};
