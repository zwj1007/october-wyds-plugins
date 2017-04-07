<?php namespace Buuug7\News\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Buuug7\News\Models\Post;
use October\Rain\Support\Facades\Flash;

/**
 * Posts Back-end Controller
 */
class Posts extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public $bodyClass = 'compact-container';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Buuug7.News', 'news', 'posts');
    }


    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $postId) {
                if ((!$post = Post::find($postId)) || !$post->canEdit($this->user)) {
                    continue;
                }

                $post->delete();
            }

            Flash::success('成功删除新闻');
        }

        return $this->listRefresh();
    }

    public function formBeforeCreate($model)
    {
        $model->user_id = $this->user->id;
    }
}
