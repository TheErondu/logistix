<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('location');
            $table->string('cargo_type');
            $table->string('e_t_a');
            $table->string('e_t_d');
            $table->integer('user_id')->unsigned();
            $table->string('capacity');
            $table->timestamps();
        });

        Schema::table('bookings', function($table) {
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
        Schema::dropIfExists('bookings');
    }
}
