<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('commissioners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('email')->nullable();
            $table->string('photo')->nullable();
            $table->text('bio')->nullable();
            $table->boolean('is_chairman')->default(false);
            $table->boolean('is_former')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('commissioners');
    }
};
