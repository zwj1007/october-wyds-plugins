<?php namespace Buuug7\Courses\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Buuug7\Courses\Models\Tag;
use Flash;
use DB;
use Lang;

/**
 * Tags Back-end Controller
 */
class Tags extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $requiredPermissions = ['buuug7.courses.access_tags'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Buuug7.Courses', 'courses', 'tags');
    }


    public function onRemove()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $itemId) {
                if (!$item = Tag::whereId($itemId)) {
                    continue;
                }

                $item->delete();

                DB::table('buuug7_courses_tags_courses')->where('tag_id', $itemId)->delete();
            }

            Flash::success(Lang::get('buuug7.courses::lang.flash.remove'));
        }

        return $this->listRefresh();
    }
}
