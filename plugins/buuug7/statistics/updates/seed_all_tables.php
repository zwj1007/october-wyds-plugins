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
                2=>["name"=>"白菜","price"=>"0.78","quantity"=>"89500","total"=>""],
                3=>["name"=>"白菜","price"=>"0.78","quantity"=>"89500","total"=>""],
                4=>["name"=>"白菜","price"=>"0.78","quantity"=>"89500","total"=>""],
                5=>["name"=>"白菜","price"=>"0.78","quantity"=>"89500","total"=>""],
                6=>["name"=>"白菜","price"=>"0.78","quantity"=>"89500","total"=>""],
                7=>["name"=>"白菜","price"=>"0.78","quantity"=>"89500","total"=>""],
                8=>["name"=>"白菜","price"=>"0.78","quantity"=>"89500","total"=>""],
                9=>["name"=>"白菜","price"=>"0.78","quantity"=>"89500","total"=>""],
                10=>["name"=>"白菜","price"=>"0.78","quantity"=>"89500","total"=>""],
            ]
        ]);
        
    }
}
