<?php namespace Buuug7\Statistics\Updates;

use Buuug7\Statistics\Models\Statistic;
use Carbon\Carbon;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{
    public function run()
    {

        $post01=Statistic::create([
            'title' => '2016上半年代购统计',
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
                7=>["name"=>"马铃薯","price"=>"0.61","quantity"=>"2197099","total"=>""]
            ]
        ]);
        
    }
}
