<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
<<<<<<< HEAD
            $table->timestamp('date');
            $table->string('location');
            $table->bigInteger('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
=======
            $table->binary('image');
            $table->timestamp('date');
            $table->string('location');
>>>>>>> c53e042863812bee9e4eeb422bbdb167a6f92db8
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
<<<<<<< HEAD
};
=======
};
>>>>>>> c53e042863812bee9e4eeb422bbdb167a6f92db8
