<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoryId');
            $table->string('categoryName');
            $table->string('symbol');
            $table->string('shareName');
            $table->integer('LDCP');
            $table->integer('OPEN');
            $table->integer('HIGH');
            $table->integer('LOW');
            $table->integer('CURRENT');
            $table->integer('CHANGE');
            $table->integer('VOLUME');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cements');
    }
}
