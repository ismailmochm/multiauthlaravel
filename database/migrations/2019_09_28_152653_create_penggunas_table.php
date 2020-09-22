<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('penggunas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_pembuat');
            $table->string('nama_penggugat', 100);
            $table->string('nama_tergugat', 100);
            $table->string('usia_penggugat', 100);
            $table->string('usia_tergugat', 100);
            $table->string('lama_nikah', 80);
            $table->string('jumlah_anak', 20);
            $table->string('pekerjaan_penggugat', 50);
            $table->string('pekerjaan_tergugat', 50);
            $table->text('alamat_penggugat', 200);
            $table->text('alamat_tergugat', 200);
            $table->string('mediasi', 10);
            $table->string('indikator', 50);
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_editor')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penggunas');
    }
}
