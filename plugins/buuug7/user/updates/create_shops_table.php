<?php namespace Buuug7\User\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateShopsTable extends Migration
{
    public function up()
    {
        Schema::create('buuug7_user_shops', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable(); // 用户id
            $table->string('name'); // 店铺名称
            //$table->string('image'); // 店铺图片
            $table->string('links'); // 店铺链接
            $table->text('description'); // 店铺介绍
            $table->boolean('featured')->default(0); // 特色店铺
            $table->boolean('checked')->default(0); // 发布状态
            $table->timestamp('checked_at')->nullable(); // 发布时间
            $table->enum('status', ['un_committed','committed','checking', 'passed', 'not_passed'])->default('un_committed');
            $table->text('not_passed_message')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buuug7_user_shops');
    }
}
