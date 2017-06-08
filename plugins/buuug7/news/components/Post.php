<?php
/**
 * Created by PhpStorm.
 * User: buuug7
 * Date: 2017/4/8 0008
 * Time: 下午 4:02
 * Desc:
 */

namespace Buuug7\News\Components;

use Buuug7\News\Models\Comment;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Buuug7\News\Models\Post as NewsPost;
use Illuminate\Support\Facades\Log;
use October\Rain\Support\Facades\Flash;
use RainLab\User\Facades\Auth;

class Post extends ComponentBase
{

    /**
     * @var Buuug7\News\Models\Post
     * the Post model
     */
    public $post;


    /**
     * @var string
     * post for linking to categories
     */
    public $categoryPage;


    public function componentDetails()
    {
        return [
            'name' => '新闻',
            'description' => '显示单条新闻',
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => '新闻别名',
                'description' => '新闻别名',
                'type' => 'string',
                'default' => '{{ :slug }}',
            ],
            'categoryPage' => [
                'title' => '新闻分类页',
                'description' => '新闻分类页',
                'type' => 'dropdown',
                'default' => 'news/category',
            ],
        ];

    }

    public function getCategoryPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRun()
    {
        $this->categoryPage = $this->page['categoryPage'] = $this->property('categoryPage');
        $post = $this->loadPost();
        $this->post = $this->page['post'] = $post;
    }

    public function loadPost()
    {
        $slug = $this->property('slug');
        $post = new NewsPost();
        $post = $post->where('slug', $slug)->isPublished()->first();

        if ($post && $post->categories->count()) {
            $post->categories->each(function ($category) {
                $category->setUrl($this->categoryPage, $this->controller);
            });
        }
        return $post;
    }

    public function onPostNewComment()
    {
        if (!Auth::check()) {
            return null;
        }
        $user = Auth::getUser();

        $conent = post('content');
        $post_id = post('id');


        $comment = new Comment([
            'content' => $conent,
            'user_id' => $user->id,
        ]);

        NewsPost::find($post_id)->comments()->save($comment);

        $this->page['comments'] = [$comment];

        Flash::success('成功发表评论');

    }

    public function onLikeCount()
    {
        $comment_id = post('id');
        $comment=Comment::find($comment_id);

        $like_count = $comment->like_count;
        if (!$like_count) {
            $comment->like_count=1;
            $comment->save();
        }else{
            $comment->like_count=$like_count+1;
            $comment->save();
        }
        Flash::success("成功点赞");
    }

}