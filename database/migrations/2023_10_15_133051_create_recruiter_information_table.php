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
        Schema::create('recruiter_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('uid')->unsigned();
            $table->foreign('uid')->references('id')->on('recruiters');
            $table->string('img_profile')->default('user_default.png');
            $table->string('firstname', '50');
            $table->string('lastname', '50');
            $table->string('email');
            $table->string('phone_number', '15')->nullable();
            $table->text('address')->nullable();
            $table->integer('archive')->default(0); // 0 = archive; 1 = active
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recruiter_information');
    }
};
