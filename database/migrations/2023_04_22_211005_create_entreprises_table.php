<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->integer('mrc_id')->nullable()->foreign('mrc_id')->references('id')->on('mrcs');
            $table->string('nom');
            $table->string('ville')->nullable();
            $table->string('code_postal')->nullable();
            $table->string('adresse_complete')->nullable();
            $table->string('telephone')->nullable();
            $table->integer('personne_ressource')->nullable();
            $table->string('logo')->nullable();
            $table->string('courriel')->nullable();
            $table->text('description')->nullable();
            $table->string('site_web')->nullable();
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
        Schema::dropIfExists('entreprises');
    }
}
