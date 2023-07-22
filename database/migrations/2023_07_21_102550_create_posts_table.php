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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable()->default('NULL');
            $table->string('slug',255)->nullable()->default('NULL');
            $table->longtext('detail')->nullable()->default('NULL');
            $table->string('image',255)->nullable()->default('NULL');
            $table->string('status',20)->default('active');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
