<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTREEVIEWSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TREEVIEWS', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NAME');
            $table->string('TEXT');
            $table->integer('PARENT_ID')->unsigned();
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
        Schema::dropIfExists('TREEVIEWS');
    }
}
