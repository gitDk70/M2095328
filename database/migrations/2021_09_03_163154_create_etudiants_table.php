<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom',255);
            $table->string('phone',25)->nullable();
            $table->string('email',255);
            $table->date('datenaiss')->nullable();
            $table->string('password');
            $table->integer('ville_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });
        // Schema::table('etudiants', function($table) {
        //     $table->foreign('ville_id')->references('id')->on('villes');
        //     $table->foreign('user_id')->references('id')->on('users');
          
        // });
     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
