<?php namespace Buuug7\User\Updates;


use October\Rain\Database\Updates\Migration;
use Schema;

class UserAddGithubIdFields extends Migration
{
    public function up()
    {
        if (Schema::hasColumns('users', ['github_id'])) {
            return;
        }
        Schema::table('users', function ($table) {
            $table->string('github_id')->nullable();
        });
    }

    public function down()
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function ($table) {
                $table->dropColumn(['github_id']);
            });
        }
    }
}