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
        Schema::create('algoritma_c50_s', function (Blueprint $table) {
            $table->id();
            $table->string('accuracy');
            $table->string('precision');
            $table->string('recall');
            $table->string('f1');
            $table->string('auc');
            $table->string('plot')->nullable();
            $table->string('flag');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('algoritma_c50_s');
    }
};
