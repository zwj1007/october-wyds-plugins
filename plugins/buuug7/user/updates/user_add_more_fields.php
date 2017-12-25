<?php namespace Buuug7\User\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class UserAddMoreProfileFields extends Migration
{
    public function up()
    {
        if (Schema::hasColumns('users', ['id_card_number', 'phone_number', 'home_address'])) {
            return;
        }
        Schema::table('users', function ($table) {
            $table->string('id_card_number',100)->nullable();
            $table->string('phone_number',100)->nullable();
            $table->string('home_address',255)->nullable();
        });
    }

    public function down()
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function ($table) {
                $table->dropColumn(['id_card_number','phone_number','home_address']);
            });
        }
    }
}
