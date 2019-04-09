<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVillageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('village', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('id', 50)->primary();
            $table->string('name', 100);
            $table->string('ward_id', 50);
            $table->timestamps();
        });
        Schema::table('village', function (Blueprint $table) {
            $table->foreign('ward_id')->references('id')->on('ward');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('village');
    }
}
