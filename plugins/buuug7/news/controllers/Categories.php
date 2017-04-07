<?php namespace Buuug7\News\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Buuug7\News\Models\Category;
use Illuminate\Support\Facades\Log;
use October\Rain\Support\Facades\Flash;

/**
 * Categories Back-end Controller
 */
class Categories extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $requiredPermissions = ['buuug7.news.access_categories'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Buuug7.News', 'news', 'categories');
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $categoryId) {
                if ((!$category = Category::find($categoryId))) {
                    continue;
                }
                $category->delete();
            }
            Flash::success('成功删除');
        }
        return $this->listRefresh();
    }

}
