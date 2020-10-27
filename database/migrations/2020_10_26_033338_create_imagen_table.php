<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateImagenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagen', function (Blueprint $table) {
            $table->id('id_img');
            $table->binary('img')->nullable();
            $table->biginteger('fk_prod')->unsigned();
            $table->foreign('fk_prod')->references('id_prod')->on('producto');
        });

        DB::statement("ALTER TABLE `imagen` CHANGE `img` `img` LONGBLOB NULL DEFAULT NULL;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagens');
    }
}
