<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     /*
        Azienda
        Stazione di partenza
        Stazione di arrivo
        Orario di partenza
        Orario di arrivo
        Codice Treno
        Numero Carrozze
        In orario
        Cancellato
     */

    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 100);
            $table->string('stazione_partenza', 50);
            $table->string('stazione_arrivo', 50);
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->date('data_partenza');
            $table->date('data_arrivo');
            $table->string('codice_treno', 10)->unique();
            $table->tinyInteger('numero_carrozze')->unsigned()->default(0);
            $table->boolean('in_orario')->default(true);
            $table->tinyInteger('cancellato')->default(0);
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
        Schema::dropIfExists('trains');
    }
}
