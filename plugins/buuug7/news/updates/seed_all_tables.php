<?php namespace Buuug7\News\Updates;

use Buuug7\News\Models\Category;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'ROOT',
            'slug' => 'root',
            'description' => 'default root',
        ]);
    }
}
