<?php namespace Buuug7\Courses\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('buuug7_courses_courses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('title');
            $table->text('summary')->nullable();;
            $table->longText('content')->nullable();
            $table->text('image')->nullable();
            $table->text('files');
            $table->text('videos');
            $table->integer('views')->unsigned()->nullable();
            $table->timestamp('published_at')->nullable();
            $table->boolean('published')->default(false);
            $table->boolean('featured')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buuug7_courses_courses');
    }
}
