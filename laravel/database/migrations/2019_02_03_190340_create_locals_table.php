<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locals', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nom');
            $table->String('adresse');
            $table->String('montant');
            $table->String('caution_eau');
            $table->String('caution_elec');
            $table->String('compteur_eau');
            $table->String('compteur_elec');
            $table->String('etat');
            $table->String('description');
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
        Schema::dropIfExists('locals');
    }
}
