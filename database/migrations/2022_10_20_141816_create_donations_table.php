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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
<<<<<<< HEAD
            $table->string('email');
            $table->integer('card_num')->unique();
            $table->timestamp('date');
            $table->float('amount');
            $table->timestamps();
            $table->rememberToken();


=======
            $table->integer('card')->unique();
            $table->timestamp('date');
            $table->float('amount');
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
        Schema::dropIfExists('donations');
    }
};
