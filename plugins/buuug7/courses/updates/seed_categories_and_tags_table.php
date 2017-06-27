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

class SeedCategoriesAndTagsTable extends Seeder
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
            'name' => '电子商务基础教程',
            'slug' => 'dian-zi-shang-wu-ji-chu-jiao-cheng',
            'description' => '在这个系列的课程中,我们将带大家学习电子商务的基础知识,其中包含了电子商务的概述,电子商务的商业模式,电子商务与供应链管理,电子商业与管理,电子商务系统建设等内容.',
            'image' => '/courses/dian-zi-shang-wu-ji-chu-jiao-cheng.png',
        ]);

        Category::create([
            'parent_id' => 1,
            'name' => '电子商务进阶教程',
            'slug' => 'dian-zi-shang-wu-jin-jie-jiao-cheng',
            'description' => '电商进阶知识系列课程',
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