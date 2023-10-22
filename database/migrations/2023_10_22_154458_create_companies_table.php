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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->integer('company_uid')->unsigned();
            $table->foreign('company_uid')->references('id')->on('recruiters');
            $table->text('company_name');
            $table->text('company_description');
            $table->text('company_industry');
            $table->text('company_country');
            $table->text('company_address');
            $table->text('company_website');
            $table->text('company_facebook');
            $table->text('company_twitter');
            $table->text('company_instagram');
            $table->integer('status')->default(0); // 0 = active; 1 = archive
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
