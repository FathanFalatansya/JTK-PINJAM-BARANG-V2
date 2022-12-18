<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapeminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('IDMahasiswa')->constrained('mahasiswa')->onDelete('cascade');
            $table->foreignId('IDBarang')->constrained('databarang')->onDelete('cascade'); 
            $table->integer('Jumlah_Barang');   
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
        Schema::dropIfExists('datapeminjamen');
    }
}
