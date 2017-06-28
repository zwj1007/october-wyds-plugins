<?php namespace Buuug7\Courses\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Buuug7\Courses\Models\Course as CoursePost;
use RainLab\User\Facades\Auth;
use October\Rain\Support\Facades\Flash;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Course extends ComponentBase
{

    /**
     * @var Buuug7\Courses\Models\Course
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
            'name' => '课程',
            'description' => '显示单条课程信息',
        ];
    }

    public function defineProperties()
    {
        return [
            'id' => [
                'title' => '课程别名',
                'description' => '课程别名',
                'default' => '{{ :id }}',
                'type' => 'string',
            ],
            'categoryPage' => [
                'title' => '分类页',
                'description' => '分类页',
                'type' => 'dropdown',
                'default' => 'courses/category',
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

        $this->post = $this->page['post'] = $this->loadPost();
    }

    public function loadPost()
    {
        $id = $this->property('id');
        $post = CoursePost::where('id', $id)->isPublished()->first();
        if(!$post){
            return null;
        }
        $courseId = $post->id;

        if ($post && $post->categories->count()) {
            $post->categories->each(function ($category) {
                $category->setUrl($this->categoryPage, $this->controller);
            });
        }

        $post['relatedPosts'] = $this->relatedPosts($courseId);
        $post['relatedPostsAll'] = $this->relatedPostsAll($courseId);
        $post['previousPost'] = $this->previousPost($courseId);
        $post['nextPost'] = $this->nextPost($courseId);
        $post['shouCang'] = $this->checkShouCang($courseId);
        return $post;
    }

    public function previousPost($courseId)
    {
        $previousId = CoursePost::where('id', '<', $courseId)->max('id');
        if (!$previousId) {
            return null;
        }
        return CoursePost::find($previousId);
    }

    public function nextPost($courseId)
    {
        $nextId = CoursePost::where('id', '>', $courseId)->min('id');
        if (!$nextId) {
            return null;
        }
        return CoursePost::find($nextId);
    }

    public function relatedPosts($courseId)
    {
        $post=CoursePost::find($courseId);
        if(!$post->categories->first()){
            return null;
        }
        return $post->categories->first()->courses()->limit(8)->get();
    }

    public function relatedPostsAll($courseId)
    {
        $post=CoursePost::find($courseId);
        if(!$post->categories->first()){
            return null;
        }
        return $post->categories->first()->courses()->limit(10)->get();
    }

    /**
     * 检查给定课程是否收藏
     * @param $courseId
     * @return bool|null
     */
    public function checkShouCang($courseId)
    {
        $check = Auth::check();
        if (!$check) {
            return null;
        }

        $user = Auth::getUser();

        if ($user->courses()->find($courseId)) {
            return true;
        } else {
            return false;
        }
    }


    /**
     * 收藏该课程
     * @param $courseId
     */
    public function onShouCang()
    {
        $courseId = post('id');
        if(!$this->checkShouCang($courseId)){
            Auth::getUser()->courses()->attach($courseId);
        }
        Flash::success('收藏成功');
        return Redirect::refresh();
    }

    public function onDetachShouCang()
    {
        $courseId = post('id');
        if (!$this->checkShouCang($courseId)) {
            return;
        }else{
            Auth::getUser()->courses()->detach($courseId);
        }
        Flash::success('成功取消收藏');
        return Redirect::refresh();
    }

}