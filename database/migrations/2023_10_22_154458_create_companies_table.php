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
            $table->string('company_logo')->default('default.png');
            $table->string('company_bg')->default('');
            $table->string('company_name')->nullable();
            $table->string('company_email')->nullable();
            $table->text('company_description')->nullable();
            $table->bigInteger('company_phone')->nullable();
            $table->string('company_founded')->nullable();
            $table->string('company_categories')->nullable();
            $table->bigInteger('company_size')->nullable();
            $table->text('company_address')->nullable();
            $table->string('company_website')->nullable();
            $table->string('company_facebook')->nullable();
            $table->string('company_linkedin')->nullable();
            $table->string('company_twitter')->nullable();
            $table->string('company_instagram')->nullable();
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
