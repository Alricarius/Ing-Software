<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->id('id_prod');
            $table->string('nom_prod')->unique();
            $table->string('desc_prod', 1000);
            $table->string('carac_prod', 1000);
            $table->integer('precio_prod');
            $table->string('tipo_prod');
            $table->dateTime('fecha_prod')->nullable();
            $table->integer('cant_prod')->default(0);
        });

        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
