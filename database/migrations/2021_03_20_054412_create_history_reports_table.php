<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_reports', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('image');
            $table->string('location');
            $table->string('status');
            $table->string('severity');
            $table->integer('contributorId');
            $table->foreign('contributorId')->references('id')->on('profiles');
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
        //
    }
}
