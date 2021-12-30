<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('booking_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('dp');
            $table->string('kekurangan');
            $table->string('snap_token');
            $table->string('status_post');
            $table->timestamps();

            $table->foreign('booking_id')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('bookings');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
