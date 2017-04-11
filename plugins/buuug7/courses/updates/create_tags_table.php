<?php
/**
 * Created by PhpStorm.
 * User: buuug7
 * Date: 2017/4/10
 * Time: 17:01
 * Desc:
 */

namespace Buuug7\Courses\Updates;


use October\Rain\Database\Updates\Migration;
use Schema;

class createTagsTables extends Migration
{
    public function up()
    {
        Schema::create('buuug7_courses_tags', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->string('slug', 100);
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::create('buuug7_courses_tags_courses', function ($table) {
            $table->engine = 'InnoDB';
            $table->integer('course_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->primary(['course_id', 'tag_id'], 'courses_tag_course');
        });
    }

    public function down()
    {
        Schema::dropIfExists('buuug7_courses_tags');
        Schema::dropIfExists('buuug7_courses_tags_courses');
    }

}