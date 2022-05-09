<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // $this->down();
        // Schema::create('messages', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->text('msgbody');
        //     $table->string('attachment')->nullable();
        //     $table->enum('status',['read','unread'])->default('unread');

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
        // Schema::dropIfExists('messages');
    }
}
