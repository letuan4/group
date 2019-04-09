<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('password');
            $table->string('province_id', 50);
            $table->string('district_id', 50);
            $table->string('ward_id', 50);
            $table->string('village_id', 50);
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('province_id')->references('id')->on('province');
            $table->foreign('district_id')->references('id')->on('district');
            $table->foreign('ward_id')->references('id')->on('ward');
            $table->foreign('village_id')->references('id')->on('village');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
