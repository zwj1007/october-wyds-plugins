<?php namespace Buuug7\News\Updates;

use Buuug7\News\Models\Category;
use Buuug7\News\Models\Post;
use Carbon\Carbon;
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

        Category::create([
            'name' => '电商资讯',
            'parent_id' => 1,
            'slug' => 'dian-shang-zi-xun',
            'description' => '电商资讯栏目',
        ]);

        Category::create([
            'name' => '政策解读',
            'parent_id' => 1,
            'slug' => 'zheng-ce-jie-du',
            'description' => '政策解读栏目',
        ]);

        Post::create([
            'title' => 'Welcome',
            'slug' => 'welcome',
            'summary' => 'welcome to our site,all your visited is free',
            'published' => true,
            'published_at' => Carbon::now(),
            'image' => '',
            'images' => [],
            'files' => [],
            'content' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, itaque, cumque, maxime obcaecati reprehenderit ea dignissimos amet voluptatem id excepturi facilis 
totam veritatis maiores eveniet neque explicabo temporibus quisquam in ex ab fugiat ipsa tempore sunt corporis nostrum quam illum!</p>",
        ]);

        Post::create([
            'title' => 'Next Article',
            'slug' => 'next-article',
            'summary' => 'you next article build with love...',
            'published' => true,
            'published_at' => Carbon::now(),
            'image' => '',
            'images' => [],
            'files' => [],
            'content' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, itaque, cumque, maxime obcaecati reprehenderit ea dignissimos amet voluptatem id excepturi facilis 
totam veritatis maiores eveniet neque explicabo temporibus quisquam in ex ab fugiat ipsa tempore sunt corporis nostrum quam illum!</p>",
        ]);

    }
}
