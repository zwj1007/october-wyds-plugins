<?php namespace Buuug7\Statistics\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateStatisticsTable extends Migration
{
    public function up()
    {
        Schema::create('buuug7_statistics_statistics', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->integer('user_id')->unsigned()->nullable();
            $table->text('summary')->nullable();
            $table->text('detail');
            $table->boolean('published')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buuug7_statistics_statistics');
    }
}
