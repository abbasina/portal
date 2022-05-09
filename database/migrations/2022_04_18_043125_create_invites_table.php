<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // $this->down();
        // Schema::create('invites', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->char('Code',30)->unique();
        //     $table->enum('isUsed',[0,1]);
        //     $table->unsignedBigInteger('user_id')->nullable();
        //     $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        //     $table->unsignedBigInteger('role_id');
        //     $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');


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
        // Schema::dropIfExists('invites');
    }
}
