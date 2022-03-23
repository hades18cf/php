<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id('id')->unique()->varchar(20)->required();
            $table->integer('user_id')->unique()->varchar(20)->required();
            $table->string('sku')->unique()->varchar(20)->required();
            $table->string('name')->required()->varchar(255);
            $table->integer('stock')->required();
            $table->string('avatar')->required()->varchar(255);
            $table->date('expired_at')->required();
            $table->integer('category_id');
            $table->timestamps();
            $table->string('flag_delete')->boolean()-> default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
}
