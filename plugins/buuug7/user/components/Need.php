<?php namespace Buuug7\User\Components;

use Cms\Classes\ComponentBase;
use Buuug7\User\Models\Need as UserNeed;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use October\Rain\Exception\ValidationException;
use October\Rain\Support\Facades\Flash;
use RainLab\User\Facades\Auth;
use ApplicationException;
use Validator;

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
        $this->page['needs'] = $this->loadNeeds();
        $this->need = $this->page['need'] = $this->loadNeed();
    }

    public function loadNeed()
    {
        $id = $this->property('id');
        $need = UserNeed::find($id);
        return $need;
    }

    public function loadNeeds()
    {
        if (!Auth::check()) {
            return null;
        }
        $user = Auth::getUser();
        return $user->needs()->orderBy('checked_at')->paginate(10);
    }


    public function onCreateNeed()
    {
        if (!Auth::check()) {
            return null;
        }

        $rules = [
            'title' => 'required',
            'description' => 'required',
        ];

        $data = post();
        $validation = Validator::make($data, $rules, [
            'required' => '请填写 :attribute',
        ], [
            'title' => '标题',
            'description' => '描述',
        ]);

        if ($validation->fails()) {
            throw new ValidationException($validation);
        }

        $user=Auth::getUser();
        $user->needs()->create([
            'title' => post('title'),
            'category' => post('category'),
            'description' => post('description'),
        ]);

        Flash::success('您的发布已经成功提交!');
        return Redirect::to('/user/center/needs');
    }

    public function onUpdateNeed()
    {
        $need = UserNeed::find(post('id'));

        if (!$need) {
            throw new ApplicationException('应用发生错误,请稍后再试!');
        }

        $rules = [
            'title' => 'required',
            'description' => 'required',
        ];

        $data = post();
        $validation = Validator::make($data, $rules, [
            'required' => '请填写 :attribute',
        ], [
            'title' => '标题',
            'description' => '描述',
        ]);

        if ($validation->fails()) {
            throw new ValidationException($validation);
        }

        $need->title = post('title');
        $need->category = post('category');
        $need->description = post('description');
        $need->checked = false;
        $need->save();
        Flash::success('更新成功!');
        return Redirect::to('/user/center/needs');
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

    // 严军芳视图需求
    //
    public function onCreateNeedOne(){
        $category=post('category');
        return Redirect::to('/needs/need/create-two/'.$category);
    }
}
