<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmovisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmovis', function (Blueprint $table) {
            $table->increments('id')
            $table->string('naslov', 50);
            $table->integer('id_zanr', 4) -> unsigned();
            $table->integer('godina', 4)->unsigned();
            $table->integer('trajanje', 4)->unsigned();
            $table->string('slika',50);
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
        Schema::dropIfExists('filmovis');
    }
}
