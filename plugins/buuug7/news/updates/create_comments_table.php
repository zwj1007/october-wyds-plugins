<?php namespace Buuug7\News\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('buuug7_news_comments', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('target_user_id')->unsigned()->nullable();
            $table->integer('post_id')->unsigned();
            $table->text('content');
            $table->integer('like_count')->unsigned()->nullable();;
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buuug7_news_comments');
    }
}
