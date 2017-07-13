<?php namespace Buuug7\Location\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCitiesTable extends Migration
{
    public function up()
    {
        Schema::create('buuug7_location_cities', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('province_id')->unsigned()->index();
            $table->string('name')->index();
            $table->string('code');
        });
    }

    public function down()
    {
        Schema::dropIfExists('buuug7_location_cities');
    }
}
