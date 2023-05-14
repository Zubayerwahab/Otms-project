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
        Schema::create('course_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id');
            $table->string('name');
            $table->string('slug');
            $table->tinyInteger('status')->default(1)->comment('0=>Ubpublished,1=>Published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_sub_categories');
    }
};
