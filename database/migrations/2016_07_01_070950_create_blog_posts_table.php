<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_post', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('author_id');
            $table->unsignedInteger('category_id')->nullable();

            $table->timestamps();
        });

        Schema::create('blog_posts_translations', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('blog_post_id');
            $table->string('locale')->index();

            $table->string('slug');
            $table->string('title');
            $table->text('intro')->nullable();
            $table->text('body')->nullable();
        });

        Schema::table('blog_post', function (Blueprint $table) {
            $table->foreign('author_id')
                ->references('id')->on('blog_authors');

            $table->foreign('category_id')
                ->references('id')->on('blog_categories');
        });

        Schema::table('blog_posts_translations', function (Blueprint $table) {
            $table->foreign('blog_post_id')
                ->references('id')->on('blog_post')
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
        Schema::dropIfExists('blog_posts_translations');
        Schema::dropIfExists('blog_post');
    }
}
