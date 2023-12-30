<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('specification_id');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('image')->nullable();
            $table->integer('fee');
            $table->string('password');
            $table->tinyinteger('status');
            $table->string('description');
            $table->timestamps();
           
            $table->foreign('specification_id')->references('id')->on('specifications')->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
