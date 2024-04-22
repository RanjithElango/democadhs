<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covidforms', function (Blueprint $table) {
            $table->id();
            $table->string('fullName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('birthday')->nullable();
            $table->string('categories')->nullable();
            $table->string('physical_contact')->nullable();
            $table->string('isolate_detail')->nullable();
            $table->string('test_result')->nullable();
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
        Schema::dropIfExists('covidforms');
    }
}
