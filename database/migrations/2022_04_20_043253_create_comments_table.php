<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // $this->down();
        // Schema::create('comments', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->text('comment');
        //     $table->enum('confirmStatus',[0,1])->default(0);
        //     $table->unsignedBigInteger('parent_id')->default(0);
        //     $table->unsignedInteger('LikesCount')->default(0);
            

        //     $table->unsignedBigInteger('article_id');
        //     $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');

        //     $table->unsignedBigInteger('user_id');
        //     $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        // Schema::dropIfExists('comments');
    }
}
