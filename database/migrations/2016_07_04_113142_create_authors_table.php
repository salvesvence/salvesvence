<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->increments('id');

//            $table->string('slug');
//            $table->string('firstname');
//            $table->string('lastname');

            $table->timestamps();
        });

        Schema::create('authors_translations', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('author_id');
            $table->string('locale')->index();

            $table->text('info');
        });

        Schema::table('authors_translations', function (Blueprint $table) {
            $table->foreign('author_id')
                ->references('id')->on('authors')
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
        Schema::dropIfExists('authors_translations');
        Schema::dropIfExists('authors');
    }
}
