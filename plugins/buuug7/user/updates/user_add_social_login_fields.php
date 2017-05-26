<?php namespace Buuug7\User\Updates;


use October\Rain\Database\Updates\Migration;
use Schema;

class UserAddSocialLoginFields extends Migration
{
    public function up()
    {
        if (Schema::hasColumns('users', ['github_id','qq_id','weixin_id','social_avatar'])) {
            return;
        }
        Schema::table('users', function ($table) {
            $table->string('github_id')->nullable();
            $table->string('qq_id')->nullable();
            $table->string('weixin_id')->nullable();
            $table->string('tianqi_id')->nullable();;
            $table->string('social_avatar')->nullable();
        });
    }

    public function down()
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function ($table) {
                //$table->dropColumn('github_id', 'qq_id', 'weixin_id','tianqi_id','social_avatar');
            });
        }
    }
}