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
        if (!Schema::hasTable('buku_tamu')) {
            Schema::create('buku_tamu', function (Blueprint $table) {
                $table->bigIncrements('id_buku-tamu');
                $table->string('nama');
                $table->string('email');
                $table->char('no_tlp', length: 14);
                $table->text('alamat');
                $table->text('kegiatan');
                $table->text('prihal');
                $table->string('pekerjaan');
                $table->string('kesan');
                $table->timestamps();
            });
        }
        
        if (!Schema::hasTable('pegawai')) {
            Schema::create('pegawai', function (Blueprint $table) {
                $table->bigIncrements('id_pegawai');
                $table->string('nama');
                $table->string('jabatan');
                $table->string('pekerjaan');
                $table->string('foto');
                $table->timestamps();
            });
        }

        Schema::table('buku_tamu', function (Blueprint $table) {
            $table->string('foto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
