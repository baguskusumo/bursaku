<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->text('nama');
            $table->text('mesin');
			$table->text('tahun_keluaran');
            $table->text('warna');
            $table->text('harga');
            $table->text('stock');
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
        Schema::dropIfExists('detail__pembayarans');
    }
}
