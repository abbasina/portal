<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTxtusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // $this->down();
        // Schema::create('txtusers', function (Blueprint $table) {
        //     $table->bigIncrements('id');

        //     $table->unsignedBigInteger('sender_id');
        //     $table->unsignedBigInteger('receiver_id');


        //     $table->unsignedBigInteger('msg_id');
        //     $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
        //     $table->foreign('receiver_id')->references('id')->on('users')->onDelete('cascade');
        //     $table->foreign('msg_id')->references('id')->on('messages')->onDelete('cascade');

        //     $table->unique(['sender_id','msg_id']);
        //     $table->unique(['receiver_id','msg_id']);
        //     $table->unique(['sender_id','receiver_id','msg_id']);
        //     $table->timestamps();
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('txtusers');
    }
}
