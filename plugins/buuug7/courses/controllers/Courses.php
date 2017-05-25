<?php namespace Buuug7\Courses\Controllers;

use Backend\Facades\BackendAuth;
use BackendMenu;
use Backend\Classes\Controller;
use Buuug7\Courses\Models\Course;
use October\Rain\Support\Facades\Flash;
use Illuminate\Support\Facades\Redirect;

/**
 * Courses Back-end Controller
 */
class Courses extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $requiredPermissions = ['buuug7.courses.access_courses', 'buuug7.courses.access_other_courses'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Buuug7.Courses', 'courses', 'courses');
    }

    public function index_onDelete()
    {
        $user=BackendAuth::getUser();
        if(!$user->hasAnyAccess(['buuug7.courses.delete'])){
            Flash::warning('没有删除课程的权限');
            return Redirect::back();
        }
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $postId) {
                if ((!$post = Course::find($postId)) || !$post->canEdit($this->user)) {
                    continue;
                }

                $post->delete();
            }

            Flash::success('成功删除课程');
        }

        return $this->listRefresh();
    }

    public function update($recordId = null)
    {

        // check a user can editor a post
        if ((!$post = Course::find($recordId)) || !$post->canEdit($this->user)) {
            Flash::warning('你没有权限编辑别人发布的课程');
            return Redirect::back();
        }

        return $this->asExtension('FormController')->update($recordId);
    }

    public function formBeforeCreate($model)
    {
        $model->user_id = $this->user->id;
    }

    public function create()
    {
        $user = BackendAuth::getUser();
        if (!$user->hasAnyAccess(['buuug7.courses.create'])) {
            Flash::warning('没有添加课程的权限');
            return Redirect::back();
        }
        BackendMenu::setContextSideMenu('new_course');
        return $this->asExtension('FormController')->create();
    }

}
