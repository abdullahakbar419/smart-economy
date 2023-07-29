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
        Schema::create('pakars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bobot_id')->nullable();
            $table->foreign('bobot_id')->references('id')->on('bobots')->onDelete('cascade');
            $table->string('pakar_name');
            $table->decimal('pasar');
            $table->decimal('jalan');
            $table->decimal('sekolah');
            $table->decimal('bank');
            $table->decimal('koperasi');
            $table->decimal('komunitas');
            $table->decimal('umkm');
            $table->decimal('media_sosial');
            $table->decimal('online_shop');
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
        Schema::dropIfExists('pakars');
    }
};
