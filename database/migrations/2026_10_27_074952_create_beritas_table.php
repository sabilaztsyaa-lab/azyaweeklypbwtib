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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            //kalau boleh kosong pakai nullable= $table->string('judul')->nullable();
            $table->string('judul');
            $table->string('penulis');
            $table->text('slug');
            $table->text('isi');
            $table->timestamps(); //database dibuat kapan
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
