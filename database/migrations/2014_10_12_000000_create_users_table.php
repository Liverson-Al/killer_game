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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('year')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('uid')->nullable();
            $table->integer('status')->nullable();
            $table->integer('status_photo')->nullable();
            $table->string('photo')->nullable(); //name_photo
            $table->integer('victim')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('message')->nullable(); //?????????

            $table->integer('count_kill')->nullable();
            $table->integer('visits')->nullable(); //?????
            $table->integer('count_attempts')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
