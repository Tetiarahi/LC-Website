<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_settings', function (Blueprint $table) {
            $table->id();
            $table->string('phone')->nullable();
            $table->string('phone2')->nullable();
            $table->string('toll_free')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('pobox')->nullable();
            $table->string('office_hours')->nullable();
            $table->string('facebook_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_settings');
    }
};
