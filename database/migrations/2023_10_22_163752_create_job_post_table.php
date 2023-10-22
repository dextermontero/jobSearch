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
        Schema::create('job_post', function (Blueprint $table) {
            $table->id();
            $table->integer('uid')->unsigned();
            $table->integer('company_uid')->unsigned();
            $table->foreign('uid')->references('id')->on('recruiters');
            $table->foreign('company_uid')->references('id')->on('companies');
            $table->text('job_title');
            $table->text('description');
            $table->integer('status')->default(0); // 0 = active; 1 = inactive; 2 = archived
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_post');
    }
};
