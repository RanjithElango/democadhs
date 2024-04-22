<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRxrefillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rxrefills', function (Blueprint $table) {
            $table->id();
            $table->string('fullName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('birthday')->nullable();
            $table->string('pharmacy_name')->nullable();
            $table->string('country')->nullable();
            $table->string('address_first')->nullable();
            $table->string('address_second')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('medication')->nullable();
            $table->string('supplies')->nullable();
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
        Schema::dropIfExists('rxrefills');
    }
}
