<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ordenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name_cliente');
            $table->string('address');
            $table->string('cell_phone');
            $table->date('order_date')->nullable();
            $table->date('deliver_date')->nullable();
            $table->double('subtotal')->nullable();
            $table->double('total')->nullable();
            $table->string('average_time', 250)->nullable();
            $table->enum('state', ['recibido', 'pendiente', 'enviado', 'entregado']);
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
        Schema::dropIfExists('ordenes');
    }
}
