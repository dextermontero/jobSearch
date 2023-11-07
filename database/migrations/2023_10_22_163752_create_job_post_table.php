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
        Schema::create('job_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id')->unsigned();
            //$table->foreign('company_id')->references('id')->on('company_lists');
            $table->integer('recruiter_id')->unsigned();
            //$table->foreign('recruiter_id')->references('id')->on('recruiters');
            $table->text('job_title');
            $table->text('description');
            $table->integer('status')->default(0); // 0 = inactive; 1 = active; 2 = repost, 3 = archived, 4 = remove
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_posts');
    }
};
