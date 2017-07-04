<?php namespace Buuug7\User\Components;

use Cms\Classes\ComponentBase;
use Buuug7\User\Models\Shop as UserShop;
use RainLab\User\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Flash;
use Log;
use ApplicationException;

class Shop extends ComponentBase
{
    public $shop = null;
    public $shops = null;

    public function componentDetails()
    {
        return [
            'name' => 'Shop Component',
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


    public function init()
    {
        //$user = Auth::getUser();
        $shop = $this->loadShop();
        if ($shop) {
            $component = $this->addComponent(
                'NetSTI\Uploader\Components\ImageUploader',
                'imageUploader',
                [
                    'modelClass' => 'Buuug7\User\Models\Shop',
                    'modelKeyColumn' => 'avatar',
                    'imageWidth' => '200',
                    'imageHeight' => '100',
                    'deferredBinding' => false,
                    'imageMode' => 'portrait'
                ]
            );

            $component->bindModel('avatar', $shop);
        }
    }

    public function onRun()
    {
        $this->shops = $this->page['shops'] = $this->loadShops();
        $this->shop = $this->page['shop'] = $this->loadShop();
    }

    public function loadShop()
    {
        $id = $this->property('id');
        $shop = UserShop::find($id);
        return $shop;
    }

    public function loadShops()
    {
        if (!Auth::check()) {
            return null;
        }

        $user = Auth::getUser();

        return $user->shops()->orderBy('checked_at')->get();
    }

    public function onCreateShop()
    {

        if (!Auth::check()) {
            return null;
        }

        $user = Auth::getUser();

        if (count($user->shops()->get())) {
            Flash::error('只允许添加一个店铺');
            return Redirect::refresh();
        }

        $shop = $user->shops()->create([
            'name' => post('name'),
            'links' => post('links'),
            'description' => post('description'),
            'status' => 'committed',
        ]);

        //Flash::success('店铺信息已经提交,我们将会尽快审核');

        return Redirect::to('/shops/shop/bind-avatar/' . $shop->id);
    }

    public function onBindAvatar()
    {
        if (!Auth::check()) {
            return null;
        }

        $user = Auth::getUser();

        $shop = UserShop::find(post('id'));

        if ($shop->avatar) {
            Flash::success('店铺信息已经提交,我们将会尽快审核');
            return Redirect::to('/user/center/shops');
        } else {
            Flash::error('发生了错误,请重新提交店铺信息,店铺缩略图未上传?');
            return Redirect::refresh();
        }
    }

    public function onUpdateShop()
    {
        $shop = UserShop::find(post('id'));
        if (!$shop) {
            throw new ApplicationException('应用发生错误,请稍后再试!');
        }

        $shop->name = post('name');
        $shop->links = post('links');
        $shop->description = post('description');
        $shop->checked = false;
        $shop->status = 'committed';
        $shop->save();
        Flash::success('更新成功');
        return Redirect::to('/user/center/shops');
    }

    public function onDeleteShop()
    {
        if (!Auth::check()) {
            return null;
        }

        $user = Auth::getUser();

        $shop = UserShop::find(post('id'));

        if ($user->id == $shop->user_id) {
            $shop->delete();
            Flash::success('成功删除');
            return Redirect::refresh();
        } else {
            Flash::error('你没有权限删除该店铺');
            return Redirect::refresh();
        }

    }

}
