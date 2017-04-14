<?php namespace Buuug7\User\Updates;


use October\Rain\Database\Updates\Migration;
use Schema;

class CreateUsersCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('buuug7_user_users_courses', function ($table) {
            $table->engine = 'InnoDB';
            $table->integer('user_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->primary(['user_id', 'course_id']);
        });
    }

    public function down(){
        Schema::drop('buuug7_user_users_courses');
    }


}