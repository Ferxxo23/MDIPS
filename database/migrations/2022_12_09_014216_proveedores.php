<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;






class Proveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('proveedores', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('nit');
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
                //
            }
        }
        
