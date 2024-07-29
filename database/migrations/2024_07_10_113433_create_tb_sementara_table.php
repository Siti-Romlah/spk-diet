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
        Schema::create('tb_sementara', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pengguna');
            $table->double('nilai');
            $table->timestamp('crated_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->integer('makanan_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_sementara');
    }
};
