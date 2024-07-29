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

    Schema::create('pengguna', function (Blueprint $table) {
        $table->id();
        $table->string('jenis_kelamin');
        $table->double('berat_badan');
        $table->double('tinggi_badan');
        $table->double('umur');
        $table->string('tingkat_aktivitas');
        $table->timestamps();
    });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('tb_pengguna', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_kelamin');
            $table->double('berat_badan');
            $table->double('tinggi_badan');
            $table->double('umur');
            $table->string('tingkat_aktivitas');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }
};
