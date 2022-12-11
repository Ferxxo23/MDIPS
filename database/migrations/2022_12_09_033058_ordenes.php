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
        //
        Schema::create('ordenes', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('producto_id')->unsigned();
            $table->bigInteger('proveedor_id')->unsigned();


            $table->string('iva');
            $table->date('fechafactura');

            $table->string('totalfactura');
            $table->string('cantidad');
            
            $table->timestamps();

            $table->foreign('producto_id')->references('id')->on('products')->onDelete("cascade");
            $table->foreign('proveedor_id')->references('id')->on('proveedores')->onDelete("cascade");




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
