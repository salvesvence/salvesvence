<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');

            $table->timestamps();
        });

        Schema::create('tags_translations', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('tag_id');
            $table->string('locale')->index();

            $table->string('slug');
            $table->string('name');
        });

        Schema::create('post_tag', function (Blueprint $table) {
            $table->unsignedInteger('post_id');
            $table->unsignedInteger('tag_id');
        });

        Schema::table('tags_translations', function (Blueprint $table) {
            $table->foreign('tag_id')
                ->references('id')->on('tags')
                ->onDelete('cascade');
        });

        Schema::table('post_tag', function (Blueprint $table) {
            $table->foreign('post_id')
                ->references('id')->on('posts')
                ->onDelete('cascade');

            $table->foreign('tag_id')
                ->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
        Schema::dropIfExists('tags_translations');
        Schema::dropIfExists('tags');
    }
}
