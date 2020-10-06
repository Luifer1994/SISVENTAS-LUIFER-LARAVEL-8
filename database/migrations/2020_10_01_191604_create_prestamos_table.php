<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    
    public function up()
    {
        Schema::create('tasa_intereses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('tasa');
            $table->timestamps();
        });

        Schema::create('estado_prestamos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('prestamos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_usuario')->constrained('users');
            $table->foreignId('id_cliente')->constrained('clientes');
            $table->foreignId('id_estado')->constrained('estado_prestamos');
            $table->foreignId('id_tasaInteres')->constrained('tasa_intereses');
            $table->decimal('monto',8,2);
            $table->decimal('intereses', 8,2);
            $table->decimal('total',8,2);
            $table->date('plazo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasa_intereses');
        Schema::dropIfExists('estado_prestamos');
        Schema::dropIfExists('prestamos');
    }
}
