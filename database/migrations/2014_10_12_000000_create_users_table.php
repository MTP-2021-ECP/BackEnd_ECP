<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('firstname');
            $table->string('lastname');
            $table->string('dateOfBirth');
            $table->string('zipCode');
            $table->string('address');
            $table->string('phoneNumber');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        // Schema::create('providers', function (Blueprint $table){
        //     $table->bigIncrements('id');
        //     $table->string('provider');
        //     $table->string('provider_id');
        //     $table->bigInteger('user_id')->unsigned();
        //     $table->string('avatar')->nullable();
        //     $table->timestamps();

        //     $table->foreign('user_id')->references('id')
        //         ->on('users')->onDelete('cascade');

        // });
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
}
