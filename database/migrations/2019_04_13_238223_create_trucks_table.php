<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('trucks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('registration_no');
            $table->string('truck_class');
            $table->string('current_location');
            $table->integer('user_id')->unsigned();
            $table->string('description');
            $table->string('model');
            $table->timestamps();
        });

        Schema::table('trucks', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trucks');
    }
}
