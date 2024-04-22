<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLabrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labrequests', function (Blueprint $table) {
            $table->id();
            $table->string('fullName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('test_result')->nullable();
            $table->string('birthday')->nullable();
            $table->string('lab_choice')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('labrequests');
    }
}
