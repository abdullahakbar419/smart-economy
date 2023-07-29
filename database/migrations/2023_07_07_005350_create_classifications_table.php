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
        Schema::create('classifications', function (Blueprint $table) {
            $table->id();
            $table->string('village_name');
            $table->decimal('pasar');
            $table->decimal('jalan');
            $table->decimal('sekolah');
            $table->decimal('bank');
            $table->decimal('koperasi');
            $table->decimal('komunitas');
            $table->decimal('umkm');
            $table->decimal('media_sosial');
            $table->decimal('online_shop');
            $table->decimal('total_value')->nullable();
            $table->enum('class', ['Cukup Berpotensi', 'Berpotensi', 'Sangat Berpotensi'])->nullable();
            $table->string('flag')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classifications');
    }
};
