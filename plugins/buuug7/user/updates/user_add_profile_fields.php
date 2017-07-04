<?php namespace Buuug7\User\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class UserAddProfileFields extends Migration
{
    public function up()
    {
        if (Schema::hasColumns('users', ['b7_mobile', 'b7_address'])) {
            return;
        }
        Schema::table('users', function ($table) {
            $table->string('b7_mobile')->nullable();
            $table->string('b7_address')->nullable();
        });
    }

    public function down()
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function ($table) {
                $table->dropColumn(['b7_mobile', 'b7_address']);
            });
        }
    }

}