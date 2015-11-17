<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id');
            $table->string('image_url');
            $table->string('image_crop_url');
            $table->text('image_description');
            $table->text('image_description2');
            $table->text('link');
            $table->string('image_name');
            $table->integer('image_type');
            $table->integer('weight');
            $table->integer('published')->default(1);
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
        Schema::drop('table');
    }
}
