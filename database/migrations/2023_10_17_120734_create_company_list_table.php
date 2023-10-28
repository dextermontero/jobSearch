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
        Schema::create('company_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
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
            $table->integer('status')->default(0); // 0 = archive; 1 = active
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_lists');
    }
};
