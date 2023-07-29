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
        Schema::create('pembobotans', function (Blueprint $table) {
            $table->id();
            $table->string('village_name');
            $table->decimal('pasar')->nullable();
            $table->decimal('jalan')->nullable();
            $table->decimal('sekolah')->nullable();
            $table->decimal('bank')->nullable();
            $table->decimal('koperasi')->nullable();
            $table->decimal('komunitas')->nullable();
            $table->decimal('umkm')->nullable();
            $table->decimal('media_sosial')->nullable();
            $table->decimal('online_shop')->nullable();
            $table->string('description')->default('');
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
        Schema::dropIfExists('pembobotans');
    }
};
