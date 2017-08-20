<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('personal_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->nullable();
            $table->string('nick_name',12)->nullable();
            $table->enum('sex',['未知','男','女'])->default('未知')->nullable();
            $table->string('address')->nullable();
            $table->string('personal_web')->nullable();
            $table->text('describe')->nullable();
            $table->integer('experience')->nullable();
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
        //
        Schema::dropIfExists('personal_infos');
    }
}
