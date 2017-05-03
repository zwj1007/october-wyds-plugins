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
                1=>["name"=>"胡萝卜","price"=>"0.87","quantity"=>"10000","total"=>""]
            ]
        ]);
        
    }
}
