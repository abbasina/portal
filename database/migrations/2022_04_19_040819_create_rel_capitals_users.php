<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelCapitalsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // $this->down();
        // Schema::create('capital_user', function (Blueprint $table) {
        //     $table->unsignedBigInteger('capital_id');
        //     $table->foreign('capital_id')->references('id')->on('capitals')->onDelete('cascade');

        //     $table->unsignedBigInteger('user_id');
        //     $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        //     $table->unique(['user_id' , 'capital_id']);
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('rel_capitals_users');
    }
}
