<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DataBarang', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Barang', 30);
            $table->string('Kode_Barang', 9);
            $table->integer('Jumlah_Barang');
            $table->timestamp(column:'created_at')->useCurrent();
            $table->timestamp(column:'updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DataBarang');
    }
}
