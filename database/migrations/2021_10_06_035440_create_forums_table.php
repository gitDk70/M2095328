<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            $table->text('title',500);
            $table->text('body',1024); 
            $table->unsignedBigInteger('user_id');
            $table->timestamp('date_added')->useCurrent();
            $table->timestamps();
        });
        // Schema::table('forums', function($table) {
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
        Schema::dropIfExists('forums');
    }
}
