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
        Schema::create('buku_tamu', function (Blueprint $table) {
            $table->bigIncrements('id_buku-tamu');
            $table->string('nama');
            $table->string('email');
            $table->char('no_tlp', length: 14);
            $table->text('alamat');
            $table->text('kegiatan');
            $table->text('tujuan');
            $table->string('pekerjaan');
            $table->timestamps();
        });

        Schema::create('pegawai', function (Blueprint $table) {
            $table->bigIncrements('id_pegawai');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('pekerjaan');
            $table->string('foto');
            $table->timestamps();
        });
        Schema::table('buku_tamu', function (Blueprint $table) {
            $table->renameColumn('tujuan', 'prihal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
