<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('projects_translations', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('project_id');
            $table->string('locale')->index();

            $table->string('slug');
            $table->string('name');
            $table->string('description', 300);
        });

        Schema::table('projects_translations', function (Blueprint $table) {
            $table->foreign('project_id')
                ->references('id')->on('projects')
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
        Schema::dropIfExists('projects_translations');
        Schema::dropIfExists('projects');
    }
}
