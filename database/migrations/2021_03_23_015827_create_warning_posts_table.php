<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarningPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warning_posts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger("account_id");
            $table->string('address');
            $table->string('level');
            $table->string("image")->default(null);
            $table->string('description');
            $table->string('status');
            $table->timestamps();
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warning_posts');
    }
}
