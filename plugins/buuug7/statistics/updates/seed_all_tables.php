<?php namespace Buuug7\Statistics\Updates;

use Buuug7\Statistics\Models\Statistic;
use Buuug7\Statistics\Models\StatisticOne;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{
    public function run()
    {

        $post01=Statistic::create([
            'title' => '2016上半年代购统计',
            'user_id' => 1,
            'summary' => '2016上半年代购统计',
            'published' => true,
            'published_at' => Carbon::now(),
            'detail' => [
                1=>["name"=>"白菜","price"=>"0.78","quantity"=>"89500","total"=>""],
                2=>["name"=>"白萝卜","price"=>"0.87","quantity"=>"73087","total"=>""],
                3=>["name"=>"红萝卜","price"=>"1.14","quantity"=>"43102","total"=>""],
                4=>["name"=>"大蒜","price"=>"3.15","quantity"=>"65941","total"=>""],
                5=>["name"=>"生姜","price"=>"3.67","quantity"=>"34176","total"=>""],
                6=>["name"=>"青椒","price"=>"1.32","quantity"=>"20947","total"=>""],
                7=>["name"=>"马铃薯","price"=>"0.61","quantity"=>"219099","total"=>""],
                8=>["name"=>"西红柿","price"=>"1.1","quantity"=>"207099","total"=>""],
            ]
        ]);
        
        
        $post01=Statistic::create([
            'title' => '2016上半年代销统计',
            'user_id' => 1,
            'summary' => '2016上半年代销统计',
            'published' => true,
            'published_at' => Carbon::now(),
            'detail' => [
                1=>["name"=>"白菜","price"=>"0.78","quantity"=>"80500","total"=>""],
                2=>["name"=>"白萝卜","price"=>"0.87","quantity"=>"63087","total"=>""],
                3=>["name"=>"红萝卜","price"=>"1.14","quantity"=>"33102","total"=>""],
                4=>["name"=>"大蒜","price"=>"3.15","quantity"=>"55941","total"=>""],
                5=>["name"=>"生姜","price"=>"3.67","quantity"=>"32176","total"=>""],
                6=>["name"=>"青椒","price"=>"1.32","quantity"=>"20447","total"=>""],
                7=>["name"=>"马铃薯","price"=>"0.61","quantity"=>"217099","total"=>""],
                8=>["name"=>"西红柿","price"=>"1.1","quantity"=>"197099","total"=>""],
            ]
        ]);


        DB::table('buuug7_statistics_statistic_ones')->insert([
            ['user_id'=>1,'buy' => 15,'sales' => 17,'poverty_total' => 5,'total' => 32,'published_at' => '2017-01-01',],
            ['user_id'=>1,'buy' => 14,'sales' => 18,'poverty_total' => 7,'total' => 32,'published_at' => '2017-01-02',],
            ['user_id'=>1,'buy' => 11,'sales' => 13,'poverty_total' => 8,'total' => 24,'published_at' => '2017-01-03',],
            ['user_id'=>1,'buy' => 20,'sales' => 30,'poverty_total' => 14,'total' => 50,'published_at' => '2017-01-04',],
            ['user_id'=>1,'buy' => 22,'sales' => 29,'poverty_total' => 7,'total' => 51,'published_at' => '2017-01-05',],
            ['user_id'=>1,'buy' => 23,'sales' => 32,'poverty_total' => 16,'total' => 55,'published_at' => '2017-01-06',],
            ['user_id'=>1,'buy' => 24,'sales' => 33,'poverty_total' => 22,'total' => 57,'published_at' => '2017-01-07',],
            ['user_id'=>1,'buy' => 25,'sales' => 31,'poverty_total' => 14,'total' => 56,'published_at' => '2017-01-08',],
            ['user_id'=>1,'buy' => 15,'sales' => 27,'poverty_total' => 9,'total' => 42,'published_at' => '2017-01-09',],
            ['user_id'=>1,'buy' => 14,'sales' => 16,'poverty_total' => 9,'total' => 30,'published_at' => '2017-01-10',],
            ['user_id'=>1,'buy' => 13,'sales' => 14,'poverty_total' => 7,'total' => 27,'published_at' => '2017-01-11',],
            ['user_id'=>1,'buy' => 12,'sales' => 12,'poverty_total' => 6,'total' => 24,'published_at' => '2017-01-12',],
            ['user_id'=>1,'buy' => 8,'sales' => 9,'poverty_total' => 3,'total' => 17,'published_at' => '2017-01-13',],
            ['user_id'=>1,'buy' => 8,'sales' => 14,'poverty_total' => 2,'total' => 22,'published_at' => '2017-01-14',],
            ['user_id'=>1,'buy' => 9,'sales' => 22,'poverty_total' => 11,'total' => 31,'published_at' => '2017-01-15',],
            ['user_id'=>1,'buy' => 9,'sales' => 18,'poverty_total' => 7,'total' => 27,'published_at' => '2017-01-16',],
            ['user_id'=>1,'buy' => 6,'sales' => 11,'poverty_total' => 6,'total' => 17,'published_at' => '2017-01-17',],
            ['user_id'=>1,'buy' => 11,'sales' => 8,'poverty_total' => 5,'total' => 19,'published_at' => '2017-01-18',],
            ['user_id'=>1,'buy' => 12,'sales' => 8,'poverty_total' => 11,'total' => 20,'published_at' => '2017-01-19',],
            ['user_id'=>1,'buy' => 11,'sales' => 8,'poverty_total' => 11,'total' => 19,'published_at' => '2017-01-20',],
            ['user_id'=>1,'buy' => 12,'sales' => 9,'poverty_total' => 8,'total' => 21,'published_at' => '2017-01-21',],
            ['user_id'=>1,'buy' => 11,'sales' => 18,'poverty_total' => 9,'total' => 29,'published_at' => '2017-01-22',],
            ['user_id'=>1,'buy' => 12,'sales' => 11,'poverty_total' => 8,'total' => 33,'published_at' => '2017-01-23',],
            ['user_id'=>1,'buy' => 15,'sales' => 8,'poverty_total' => 13,'total' => 23,'published_at' => '2017-01-24',],
            ['user_id'=>1,'buy' => 15,'sales' => 15,'poverty_total' => 16,'total' => 30,'published_at' => '2017-01-25',],
            ['user_id'=>1,'buy' => 15,'sales' => 17,'poverty_total' => 18,'total' => 32,'published_at' => '2017-01-26',],
            ['user_id'=>1,'buy' => 9,'sales' => 17,'poverty_total' => 11,'total' => 26,'published_at' => '2017-01-27',],
            ['user_id'=>1,'buy' => 11,'sales' => 22,'poverty_total' => 8,'total' => 33,'published_at' => '2017-01-28',],
            ['user_id'=>1,'buy' => 22,'sales' => 30,'poverty_total' => 19,'total' => 52,'published_at' => '2017-01-29',],
            ['user_id'=>1,'buy' => 23,'sales' => 30,'poverty_total' => 22,'total' => 53,'published_at' => '2017-01-30',],
            ['user_id'=>1,'buy' => 23,'sales' => 30,'poverty_total' => 11,'total' => 53,'published_at' => '2017-01-31',],


            ['user_id'=>1,'buy' => 12,'sales' => 13,'poverty_total' => 5,'total' => 25,'published_at' => '2017-02-01',],
            ['user_id'=>1,'buy' => 11,'sales' => 16,'poverty_total' => 7,'total' => 27,'published_at' => '2017-02-02',],
            ['user_id'=>1,'buy' => 9,'sales' => 11,'poverty_total' => 8,'total' => 20,'published_at' => '2017-02-03',],
            ['user_id'=>1,'buy' => 15,'sales' => 24,'poverty_total' => 14,'total' => 39,'published_at' => '2017-02-04',],
            ['user_id'=>1,'buy' => 20,'sales' => 25,'poverty_total' => 7,'total' => 45,'published_at' => '2017-02-05',],
            ['user_id'=>1,'buy' => 20,'sales' => 27,'poverty_total' => 16,'total' => 47,'published_at' => '2017-02-06',],
            ['user_id'=>1,'buy' => 19,'sales' => 28,'poverty_total' => 22,'total' => 47,'published_at' => '2017-02-07',],
            ['user_id'=>1,'buy' => 23,'sales' => 30,'poverty_total' => 14,'total' => 53,'published_at' => '2017-02-08',],
            ['user_id'=>1,'buy' => 13,'sales' => 25,'poverty_total' => 9,'total' => 38,'published_at' => '2017-02-09',],
            ['user_id'=>1,'buy' => 12,'sales' => 13,'poverty_total' => 9,'total' => 25,'published_at' => '2017-02-10',],
            ['user_id'=>1,'buy' => 12,'sales' => 12,'poverty_total' => 7,'total' => 24,'published_at' => '2017-02-11',],
            ['user_id'=>1,'buy' => 10,'sales' => 11,'poverty_total' => 6,'total' => 21,'published_at' => '2017-02-12',],
            ['user_id'=>1,'buy' => 9,'sales' => 7,'poverty_total' => 3,'total' => 16,'published_at' => '2017-02-13',],
            ['user_id'=>1,'buy' => 9,'sales' => 12,'poverty_total' => 2,'total' => 21,'published_at' => '2017-02-14',],
            ['user_id'=>1,'buy' => 6,'sales' => 21,'poverty_total' => 11,'total' => 27,'published_at' => '2017-02-15',],
            ['user_id'=>1,'buy' => 6,'sales' => 15,'poverty_total' => 7,'total' => 21,'published_at' => '2017-02-16',],
            ['user_id'=>1,'buy' => 7,'sales' => 10,'poverty_total' => 6,'total' => 17,'published_at' => '2017-02-17',],
            ['user_id'=>1,'buy' => 10,'sales' => 7,'poverty_total' => 5,'total' => 17,'published_at' => '2017-02-18',],
            ['user_id'=>1,'buy' => 10,'sales' => 6,'poverty_total' => 11,'total' => 16,'published_at' => '2017-02-19',],
            ['user_id'=>1,'buy' => 7,'sales' => 5,'poverty_total' => 11,'total' => 12,'published_at' => '2017-02-20',],
            ['user_id'=>1,'buy' => 11,'sales' => 7,'poverty_total' => 8,'total' => 18,'published_at' => '2017-02-21',],
            ['user_id'=>1,'buy' => 10,'sales' => 13,'poverty_total' => 9,'total' => 23,'published_at' => '2017-02-22',],
            ['user_id'=>1,'buy' => 11,'sales' => 10,'poverty_total' => 8,'total' => 21,'published_at' => '2017-02-23',],
            ['user_id'=>1,'buy' => 12,'sales' => 9,'poverty_total' => 13,'total' => 21,'published_at' => '2017-02-24',],
            ['user_id'=>1,'buy' => 12,'sales' => 15,'poverty_total' => 16,'total' => 27,'published_at' => '2017-02-25',],
            ['user_id'=>1,'buy' => 14,'sales' => 14,'poverty_total' => 18,'total' => 28,'published_at' => '2017-02-26',],
            ['user_id'=>1,'buy' => 6,'sales' => 13,'poverty_total' => 11,'total' => 19,'published_at' => '2017-02-27',],
            ['user_id'=>1,'buy' => 9,'sales' => 20,'poverty_total' => 8,'total' => 29,'published_at' => '2017-02-28',],

        ]);

        
    }
}
