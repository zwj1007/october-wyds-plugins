<?php namespace Buuug7\Statistics\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Buuug7\Statistics\Models\Statistic;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use October\Rain\Exception\ApplicationException;
use October\Rain\Exception\SystemException;
use October\Rain\Foundation\Application;

/**
 * Statistics Back-end Controller
 */
class Statistics extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function formBeforeCreate($model)
    {
        $model->user_id = $this->user->id;
    }

    public function create()
    {
        BackendMenu::setContextSideMenu('new_statistics');
        return $this->asExtension('FormController')->create();
    }

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Buuug7.Statistics', 'statistics', 'statistics');
    }


    public function view($id)
    {
        $model = Statistic::find($id);
        if(!$model){
            return Redirect::to('backend/buuug7/statistics/statistics')->with('errors','资源没有找到');
        }
        $this->vars['model'] = $model;
        $this->pageTitle = '统计预览';
        return $this->makePartial('view');
    }
}
