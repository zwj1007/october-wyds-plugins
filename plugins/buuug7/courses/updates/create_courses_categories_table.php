<?php namespace Buuug7\Courses\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreatePostsCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('buuug7_courses_categories', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->integer('parent_id')->unsigned()->index()->nullable();
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('nest_depth')->nullable();
            $table->timestamps();
        });

        Schema::create('buuug7_courses_courses_categories', function ($table) {
            $table->engine = 'InnoDB';
            $table->integer('course_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->primary(['course_id', 'category_id']);
        });
    }


    public function down()
    {
        Schema::dropIfExists('buuug7_courses_categories');
        Schema::dropIfExists('buuug7_courses_courses_categories');
    }

}

