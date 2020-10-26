<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('nom_user',50);
            $table->string('ape_user',50);
            $table->integer('telf_user')->nullable();
            $table->string('email_user');
            $table->string('pass_user', 20);
            $table->integer('cel_user')->nullable();
            $table->string('dep_user')->nullable();
            $table->string('prov_user')->nullable();
            $table->string('dir_user');
            $table->tinyInteger('tipo_user')->default(0);
            $table->integer('carnet_user');
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
