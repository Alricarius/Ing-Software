<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('nom_user',50);
            $table->string('ape_user',50);
            $table->string('email_user')->unique();
            $table->string('pass_user', 300);
            $table->integer('cel_user')->nullable();
            $table->string('dep_user')->nullable();
            $table->tinyInteger('tipo_user')->default(0);
            $table->string("pregunta");
            $table->string("respuesta");
            $table->integer('carnet_user');
            $table->rememberToken();
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
        Schema::dropIfExists('user');
    }
}
