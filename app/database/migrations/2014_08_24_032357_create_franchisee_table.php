<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchiseeTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchisees', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('location');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('direct_phone')->nullable();
            $table->string('url')->nullable();
            $table->string('image')->nullable();
            $table->text('postcodes')->nullable();
            $table->text('about')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('franchisees');
    }

}
