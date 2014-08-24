<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestimonialsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonialcategories', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('testimonials', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('testimonialcategory_id')->unsigned();
            $table->text('content');
            $table->string('name');
            $table->string('location');

            $table->foreign('testimonialcategory_id')
                ->references('id')->on('testimonialcategories')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('testimonials');
        Schema::drop('testimonialcategories');
    }

}
