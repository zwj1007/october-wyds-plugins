<?php namespace Buuug7\News\Updates;


use Buuug7\News\Models\Post;

class RegeneratePostsSlugColumn extends \October\Rain\Database\Updates\Seeder
{
    public function run()
    {
        $posts = Post::all();

        foreach ($posts as $post) {
            $post->slug = null;
            $post->slugAttributes();
            $post->save();
        }
    }

}
