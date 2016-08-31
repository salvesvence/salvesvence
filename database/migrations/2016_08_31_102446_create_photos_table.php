<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sm_thumbnail');
            $table->string('md_thumbnail');
            $table->string('lg_thumbnail');
            $table->timestamps();
        });

        Schema::create('photo_post', function (Blueprint $table) {
            $table->integer('photo_id')->unsigned();
            $table->integer('post_id')->unsigned();

            $table->foreign('photo_id')
                ->references('id')
                ->on('photos')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('post_id')
                ->references('id')
                ->on('posts')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->primary(['photo_id', 'post_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photo_post');
        Schema::dropIfExists('photos');
    }
}
