<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelPermissionsRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // $this->down();
        // Schema::create('permission_role', function (Blueprint $table) {
        //     $table->unsignedBigInteger('permission_id');
        //     $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');

        //     $table->unsignedBigInteger('role_id');
        //     $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

        //     $table->unique(['role_id' , 'permission_id']);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('permissions_role');
    }
}
