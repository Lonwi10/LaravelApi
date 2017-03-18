<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuntsWifiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('wifis', function(Blueprint $table) {
            $table->increments("id");
            $table->string("codigoCapa");
            $table->string("CapaGenerica");
            $table->string("nombreCapa");
            $table->string("equip");
            $table->string("distrito");
            $table->string("barrio");
            $table->string("direccion");
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
        Schema::dropIfExists('wifis');
    }
}
