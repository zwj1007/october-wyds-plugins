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
use Buuug7\Courses\Models\Course;
use Buuug7\Courses\Models\Tag;
use Carbon\Carbon;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'ROOT',
            'slug' => 'root',
            'description' => '根节点',
        ]);
        
        Category::create([
            'parent_id' => 1,
            'name' => '电商基础知识',
            'slug' => 'dian-shang-ji-chu-zhi-shi',
            'description' => '电商基础知识类目',
        ]);

        Category::create([
            'parent_id' => 1,
            'name' => '电商进阶知识',
            'slug' => 'dian-shang-jin-jie-zhi-shi',
            'description' => '电商进阶知识类目',
        ]);
        
        Course::create([
            'title' => 'First course',
            'slug' => 'first-course',
            'published' => true,
            'published_at' => Carbon::now(),
            'image' => '',
            'files' => [],
            'summary' => '了解电商基本知识',
            'content' => '选择了电商这个行业，我们目前能做的就是不断的去学习，去进步，去突破，通过这些内容，让大家知道电子商务如何的去运营，如何去注重细节，如何的去进行全方位的协同作战，取得最高的工作效率',
        ]);
        
        Tag::create([
            'name' => '热门',
            'slug' => 're-men',
            'description' => '热门课程',
        ]);

        Tag::create([
            'name' => '推荐',
            'slug' => 'tui-jian',
            'description' => '推荐课程',
        ]);

    }

}