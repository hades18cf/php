<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id('id')->unique()->varchar(100)->required();
            $table->string('user_name')->required()->unique()->varchar(100);
            $table->string('email')->unique()->varchar(100)->required();
            $table->date('birthday')->required()->date();
            $table->string('first_name')->required()->varchar(100);
            $table->string('last_name')->required()->varchar(100);
            $table->string('password')->required();
            $table->string('reset_password')->required();
            $table->string('status')->required();
            $table->string('flag_delete')->boolean()-> default(0);
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
}
