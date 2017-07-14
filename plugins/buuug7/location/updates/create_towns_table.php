<?php namespace Buuug7\Location\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTownsTable extends Migration
{
    public function up()
    {
        Schema::create('buuug7_location_towns', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('county_id')->unsigned()->index();
            $table->string('name')->index();
            $table->string('code');
        });
    }

    public function down()
    {
        Schema::dropIfExists('buuug7_location_towns');
    }
}
