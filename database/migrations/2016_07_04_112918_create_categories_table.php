<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');

            $table->timestamps();
        });

        Schema::create('categories_translations', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('category_id');
            $table->string('locale')->index();

            $table->string('slug');
            $table->string('name');
        });

        Schema::table('categories_translations', function (Blueprint $table) {
            $table->foreign('category_id')
                ->references('id')->on('categories')
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
        Schema::dropIfExists('categories_translations');
        Schema::dropIfExists('categories');
    }
}
