<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvtlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evtlists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('GID');
            $table->integer('NODEID');
            $table->string('NODEIP');
            $table->string('NODENAME');
            $table->dateTime('EVTSTART');
            $table->dateTime('EVTEND');
            $table->boolean('EVTOPEN');
            $table->integer('EVTGROUP');
            $table->string('EVTITEM');
            $table->boolean('NODESTAT');
            $table->string('EVTDESCR');
            $table->string('EVTCOMMENT');
            $table->integer('EVTID');
            $table->boolean('EVTIGNORE');
            $table->boolean('EvtNotify');
            $table->boolean('CLSNotify');
            $table->boolean('wChk');
            $table->boolean('CurWeight');
            $table->dateTime('ChkDate');
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
        Schema::dropIfExists('evtlists');
    }
}
