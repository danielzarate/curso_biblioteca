<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePermisoRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_rol', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('rol_id')->unsigned();
            $table->foreign('rol_id')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');

            $table->bigInteger('permiso_id')->unsigned();
            $table->foreign('permiso_id')->references('id')->on('permiso')->onDelete('restrict')->onUpdate('restrict');            

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
        Schema::dropIfExists('permiso_rol');
    }
}
