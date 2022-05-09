<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('notes', function (Blueprint $table) {
        //     $table->bigIncrements('id');

        //     $table->text('notebody');
        //     $table->text('description');
        //     $table->char('title',200);
        //     $table->char('imageUrl',200)->nullable();
        //     $table->enum('confirm',[0,1])->default(0);
        //     $table->enum('publish',[0,1])->default(0);

        //     $table->unsignedBigInteger('tags_id')->nullable();
        //     $table->foreign('tags_id')->references('id')->on('tags');

        //     $table->unsignedBigInteger('user_id');
        //     $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        //     $table->integer('viewCount')->default(0);
        //     $table->integer('commentCount')->default(0);
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
        // Schema::dropIfExists('notes');
    }
}

