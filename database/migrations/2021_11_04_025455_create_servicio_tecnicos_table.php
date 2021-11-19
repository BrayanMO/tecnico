<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicioTecnicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_tecnicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombredueno',45);
            $table->string('apellidodueno',45);
            $table->string('emaildueno',30);
            $table->char('celulardueno',15);
            $table->string('direcciondueno',400);
            $table->string('marcaequipo',20);
            $table->string('modeloequipo',20);
            $table->text('fallas');
            $table->text('solucion')->nullable();
            $table->date('fechaentrada');
            $table->date('fechasalida');
            $table->integer('estado');
            $table->float('precio',8,2);
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('idtipoequipo');
            $table->unsignedBigInteger('idtiposervicio');
            $table->foreign('idtipoequipo')->references('id')->on('tipoequipos');
            $table->foreign('idtiposervicio')->references('id')->on('tiposervicios');
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
        Schema::dropIfExists('servicio_tecnicos');
    }
}
