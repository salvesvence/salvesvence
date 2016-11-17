<?php

use Illuminate\Support\Facades\Schema;
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

            $table->string('slug');
            $table->string('title');
            $table->text('body');

            $table->timestamps();
        });

        Schema::table('posts', function (Blueprint $table) {
            $table->foreign('author_id')
                  ->references('id')->on('users');

            $table->foreign('category_id')
                  ->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
