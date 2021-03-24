<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_information', function (Blueprint $table) {
            $table->unsignedBigInteger("user_id");
            $table->string('name');
            $table->string('image')->default(null);
            $table->string('address');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
            $table->primary("user_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_information');
    }
}
