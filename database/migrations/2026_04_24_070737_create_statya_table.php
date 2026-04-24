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
        Schema::create('statya', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('statya_name');
            $table->text('statya_text');
            $table->date('statya_create');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statya');
    }
};
