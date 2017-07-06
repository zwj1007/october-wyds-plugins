<?php namespace Buuug7\News\Updates;

use Buuug7\News\Models\Category;
use Buuug7\News\Models\Comment;
use Buuug7\News\Models\Post;
use Carbon\Carbon;
use October\Rain\Database\Updates\Seeder;

class SeedPostsOneTables extends Seeder{
    public function run()
    {
        //
        // 新闻分类 start
        //

        /*ID:1*/
        Category::create([
            'name' => '根节点',
            'slug' => 'root',
            'description' => 'default root',
        ]);

        /*ID:2 电商动态*/
        Category::create([
            'name' => '电商动态',
            'parent_id' => 1,
            'slug' => 'dian-shang-dong-tai',
            'description' => '在这里你可以了解最新的行业',
        ]);

        /*ID:3 政策解读*/
        Category::create([
            'name' => '政策解读',
            'parent_id' => 1,
            'slug' => 'zheng-ce-jie-du',
            'description' => '在这里你可以了解与电子商务相关的政策',
        ]);

        /*ID:4 通知公告*/
        Category::create([
            'name' => '通知公告',
            'parent_id' => 1,
            'slug' => 'tong-zhi-gong-gao',
            'description' => '渭源县电子商务公共服务平台通知公告',
        ]);

        /*ID:5 信息公开*/
        Category::create([
            'name' => '信息公开',
            'parent_id' => 1,
            'slug' => 'xin-xi-gong-kai',
            'description' => '渭源县电子商务公共服务平台信息公开',
        ]);

        //
        // 新闻分类 end
        //
    }
}



