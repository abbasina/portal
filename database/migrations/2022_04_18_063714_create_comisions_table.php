<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //  $this->down();
        //  Schema::create('comisions', function (Blueprint $table) {
        //      $table->bigIncrements('id');
        //      $table->char('name',100);
        //      $table->text('introduce');
        //      $table->char('boss',80);
        //      $table->text('boss-image');
        //      $table->text('boss-bio');
        //      $table->char('chief',80);
        //      $table->text('chief-bio');
        //      $table->text('chief-image');
        //      $table->timestamps();
        //  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //  Schema::dropIfExists('comisions');
    }
}
