<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ward', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('id', 50)->primary();
            $table->string('name', 100);
            $table->string('district_id', 50);
            $table->timestamps();
        });
        Schema::table('ward', function (Blueprint $table) {
            $table->foreign('district_id')->references('id')->on('district');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ward');
    }
}
