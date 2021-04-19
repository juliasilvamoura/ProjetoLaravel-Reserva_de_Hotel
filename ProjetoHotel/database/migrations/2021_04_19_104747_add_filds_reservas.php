<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFildsReservas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservas', function (Blueprint $table){
        $table->integer('cliente_id')->unsigned();
        $table->foreign('cliente_id')->references('id')->on('clientes');
        $table->integer('quarto_id')->unsigned();
        $table->foreign('quarto_id')->references('id')->on('quartos');
        $table->integer('pagamento_id')->unsigned();
        $table->foreign('pagamento_id')->references('id')->on('pagamentos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
