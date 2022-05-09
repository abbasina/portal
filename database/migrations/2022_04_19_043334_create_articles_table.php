<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use phpDocumentor\Reflection\Types\Nullable;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // $this->down();
        // Schema::create('articles', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('title');
        //     $table->string('slug');
        //     $table->text('description');
        //     $table->text('body');
        //     $table->string('imageUrl');
            
        //     $table->enum('confirm',[0,1])->default(0);
        //     $table->enum('publish',[0,1])->default(0);

        //     $table->unsignedBigInteger('tags_id')->nullable();
        //     $table->foreign('tags_id')->references('id')->on('tags');

        //     $table->unsignedBigInteger('capital_id');
        //     $table->foreign('capital_id')->references('id')->on('capitals')->onDelete('cascade');

        //     $table->unsignedBigInteger('comision_id');
        //     $table->foreign('comision_id')->references('id')->on('comisions')->onDelete('cascade');

            
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
        // Schema::dropIfExists('articles');
    }
}
