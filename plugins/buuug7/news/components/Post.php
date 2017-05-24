<?php
/**
 * Created by PhpStorm.
 * User: buuug7
 * Date: 2017/4/8 0008
 * Time: 下午 4:02
 * Desc:
 */

namespace Buuug7\News\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Buuug7\News\Models\Post as NewsPost;

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
                'default' => '{{ :slug }}',
                'type' => 'string',
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
        $this->categoryPage=$this->page['categoryPage']=$this->property('categoryPage');
        $this->post=$this->page['post']=$this->loadPost();
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

    public function previousPost()
    {
        return $this->getPostSibling(-1);
    }

    public function nextPost()
    {
        return $this->getPostSibling(1);
    }

    public function getPostSibling($direction = 1)
    {
        if (!$this->post) {
            return;
        }
        $method = $direction === -1 ? 'previousPost' : 'nextPost';

        if(!$post=$this->post->$method()){
            return;
        }
        $postPage=$this->getPage()->getBaseFileName();

        $post->setUrl($postPage,$this->controller);

        $post->categories->each(function($category) {
            $category->setUrl($this->categoryPage, $this->controller);
        });

        return $post;
    }

}