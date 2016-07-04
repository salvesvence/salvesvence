<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('author_id');
            $table->unsignedInteger('category_id')->nullable();

            $table->timestamps();
        });

        Schema::create('posts_translations', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('post_id');
            $table->string('locale')->index();

            $table->string('slug');
            $table->string('title');
            $table->text('intro')->nullable();
            $table->text('body')->nullable();
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->foreign('author_id')
                ->references('id')->on('authors');

            $table->foreign('category_id')
                ->references('id')->on('categories');
        });

        Schema::table('posts_translations', function (Blueprint $table) {
            $table->foreign('post_id')
                ->references('id')->on('posts')
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
        Schema::dropIfExists('posts_translations');
        Schema::dropIfExists('posts');
    }
}
