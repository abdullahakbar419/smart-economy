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
        Schema::create('bobots', function (Blueprint $table) {
            $table->id();
            $table->decimal('pasar', 20, 15);
            $table->decimal('jalan', 20, 15);
            $table->decimal('sekolah', 20, 15);
            $table->decimal('bank', 20, 15);
            $table->decimal('koperasi', 20, 15);
            $table->decimal('komunitas', 20, 15);
            $table->decimal('umkm', 20, 15);
            $table->decimal('media_sosial', 20, 15);
            $table->decimal('online_shop', 20, 15);
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
        Schema::dropIfExists('bobots');
    }
};
