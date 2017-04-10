<?php
/**
 * Created by PhpStorm.
 * User: buuug7
 * Date: 2017/4/10
 * Time: 18:05
 * Desc:
 */

namespace Buuug7\Courses\Updates;


use Buuug7\Courses\Models\Category;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => '电商基础知识',
            'slug' => 'dian-shang-ji-chu-zhi-shi',
            'description' => '电商基础知识类目',
        ]);

        Category::create([
            'name' => '电商进阶知识',
            'slug' => 'dian-shang-jin-jie-zhi-shi',
            'description' => '电商进阶知识类目',
        ]);
    }

}