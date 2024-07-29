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
        Schema::create('tb_makanan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->double('kalori');
            $table->double('protein');
            $table->double('karbo');
            $table->decimal('lemak');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_makanan');
    }
};
