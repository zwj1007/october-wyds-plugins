<?php namespace Buuug7\User\Components;

use Cms\Classes\ComponentBase;
use Buuug7\User\Models\Need as UserNeed;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use October\Rain\Support\Facades\Flash;
use RainLab\User\Facades\Auth;
use ApplicationException;

class Need extends ComponentBase
{
    public $need = null;

    public function componentDetails()
    {
        return [
            'name' => 'Need Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'id' => [
                'title' => 'ID',
                'description' => 'ID',
                'default' => '{{ :id }}',
                'type' => 'string',
            ],
        ];
    }

    public function onRun()
    {
        $this->page['userRelatedNeeds'] = $this->loadUserRelatedNeeds();
        $this->need = $this->page['need'] = $this->loadNeed();
        $this->page['needs'] = $this->loadCheckedNeedList();
    }

    public function loadNeed()
    {
        $id = $this->property('id');
        $need = UserNeed::find($id);
        return $need;
    }

    public function loadUserRelatedNeeds()
    {
        $user = Auth::getUser();
        return $user->need()->paginate(25);
    }

    public function loadCheckedNeedList()
    {
        return UserNeed::isChecked()->orderBy('checked_at', 'desc')->paginate(15);
    }


    public function onCreateNeed()
    {
        $need = new UserNeed();
        $need->user_id = Auth::getUser()->id;
        $need->title = post('title');
        $need->description = post('description');
        $need->contact_phone = post('contact_phone');
        $need->save();
        Flash::success('您的发布已经成功提交!');
        return Redirect::to('needs');
    }

    public function onUpdateNeed()
    {
        $need = UserNeed::find(post('id'));
        if (!$need) {
            throw new ApplicationException('应用发生错误,请稍后再试!');
        }
        $need->title = post('title');
        $need->contact_phone = post('contact_phone');
        $need->description = post('description');
        $need->checked = false;
        $need->save();
        Flash::success('更新成功!');
        return Redirect::to('needs');
    }

    public function onDeleteNeed()
    {
        $need = UserNeed::find(post('id'));
        if (!$need) {
            return Redirect::refresh();
        }
        $need->delete();
        Flash::success('成功删除');
        return Redirect::refresh();
    }
}
