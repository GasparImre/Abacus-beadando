<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class  CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ladder_1');
            $table->integer('ladder_2');
            $table->integer('ladder_3');
            $table->integer('ladder_4');
            $table->integer('ladder_5');
            $table->integer('ladder_6');
            $table->integer('ladder_7');
            $table->integer('ladder_8');
            $table->timestamps();
            $table->string('username',100)->default('Abacus user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
}
