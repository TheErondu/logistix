<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTruckRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truck_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pickup_location');
            $table->string('destination');
            $table->string('truck_class');
            $table->string('e_t_d');
            $table->integer('user_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('truck_requests', function($table) {
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
        Schema::dropIfExists('truck_requests');
    }
}
