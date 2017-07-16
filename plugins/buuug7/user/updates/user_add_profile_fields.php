<?php namespace Buuug7\User\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class UserAddProfileFields extends Migration
{
    public function up()
    {
        if (Schema::hasColumns('users', ['county_id', 'town_id','village_id'])) {
            return;
        }
        Schema::table('users', function ($table) {
            $table->integer('county_id')->unsigned()->nullable()->index();
            $table->integer('town_id')->unsigned()->nullable()->index();
            $table->integer('village_id')->unsigned()->nullable()->index();
        });
    }

    public function down()
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function ($table) {
                $table->dropColumn(['county_id','town_id','village_id']);
            });
        }
    }

}