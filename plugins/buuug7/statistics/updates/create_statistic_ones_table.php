<?php namespace Buuug7\Statistics\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateStatisticOnesTable extends Migration
{
    public function up()
    {
        Schema::create('buuug7_statistics_statistic_ones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id');
            $table->float('buy'); //购进
            $table->float('sales'); // 外销
            $table->float('poverty_total'); // 贫困村电商交易额
            $table->float('total'); //电商交易额
            $table->date('published_at'); // 提交时间
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buuug7_statistics_statistic_ones');
    }
}
