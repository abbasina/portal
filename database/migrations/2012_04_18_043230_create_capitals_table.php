<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // $this->down();
        // Schema::create('capitals', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->char('name',60);
        //     $table->char('city_people_amount',60);
        //     $table->char('city_places',150);
        //     $table->char('city_address',100);
        //     $table->char('city_tel',60);
        //     $table->char('city_website',60);
            
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
        // Schema::dropIfExists('capitals');
    }
}
