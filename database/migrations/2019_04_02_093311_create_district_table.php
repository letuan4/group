<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('id', 50)->primary();
            $table->string('name', 100);
            $table->string('province_id', 50);
            $table->timestamps();
        });
        Schema::table('district', function (Blueprint $table) {
            $table->foreign('province_id')->references('id')->on('province');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('district');
    }
}
