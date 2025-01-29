<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Dvarilek\CompleteModelSnapshot\Tests\Models\TestParent1Model;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('test_parent_models_2', function (Blueprint $table) {
            $table->id();
            $table->string('attribute1')->nullable()->default(null);
            $table->string('attribute2')->nullable()->default(null);
            $table->string('attribute3')->nullable()->default(null);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('test_parent_models_2');
    }
};