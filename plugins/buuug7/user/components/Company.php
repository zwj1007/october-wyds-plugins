<?php namespace Buuug7\User\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;
use RainLab\User\Facades\Auth;
use Validator;
use Flash;
use Redirect;
use October\Rain\Exception\ValidationException;
use Buuug7\User\Models\Company as UserCompany;


class Company extends ComponentBase
{
    public $canCompany = true;

    public $company = null;
    public $companies = null;

    public function componentDetails()
    {
        return [
            'name' => 'Company Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function init()
    {
        //$user = Auth::getUser();
        $company = $this->loadCompany();
        if ($company) {
            $component = $this->addComponent(
                'NetSTI\Uploader\Components\ImageUploader',
                'imageUploader',
                [
                    'modelClass' => 'Buuug7\User\Models\Company',
                    'modelKeyColumn' => 'avatar',
                    'imageWidth' => '200',
                    'imageHeight' => '100',
                    'deferredBinding' => true,
                    'imageMode' => 'portrait'
                ]
            );

            $component->bindModel('avatar', $company);
        }
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
        $this->company = $this->page['company'] = $this->loadCompany();
        $this->companies = $this->page['companies'] = $this->loadCompanies();
    }


    /**
     * return the logged user company information
     */
    public function loadCompany()
    {
        $id = $this->property('id');
        $company = UserCompany::find($id);
        return $company;
    }

    public function loadCompanies()
    {
        if (!Auth::check()) {
            return null;
        }

        $user = Auth::getUser();

        return $user->companies()->orderBy('checked_at')->get();
    }

    public function onCreateCompany()
    {


        if (!Auth::check()) {
            return null;
        }

        $user = Auth::getUser();

        if (count($user->companies()->get())) {
            Flash::error('只允许添加一个公司');
            return Redirect::refresh();
        }


        if (!$this->canCompany) {
            throw new ApplicationException('你的账号不允许提交公司认证信息');
        }
        $company = Auth::getUser()->companies()->create([
            'name' => post('name'),
            'address' => post('address'),
            'contact_phone' => post('contact_phone'),
            'description' => post('description'),
            'detail' => post('detail'),
            'status' => 'committed',
            'checked' => false,
        ]);

        //Flash::success('信息已经提交');

        return Redirect::to('/companies/company/bind-avatar/' . $company->id);
    }

    public function onBindAvatar()
    {
        if (!Auth::check()) {
            return null;
        }

        $user = Auth::getUser();
        $company = UserCompany::find(post('id'));

        if ($company->avatar) {
            Flash::success('公司信息已经提交,我们将会尽快审核');
            return Redirect::to('/user/center/companies');
        } else {
            Flash::error('发生了错误,请重新提交公司信息,店铺缩略图未上传?');
            return Redirect::refresh();
        }
    }


    public function onUpdateCompany()
    {
        $company=UserCompany::find(post('id'));
        if (!$company) {
            throw new ApplicationException('应用发生错误,请稍后再试!');
        }
        $company->name = post('name');
        $company->address = post('address');
        $company->contact_phone = post('contact_phone');
        $company->description = post('description');
        $company->detail = post('detail');
        $company->status = 'committed';
        $company->checked = false;
        $company->not_passed_message = null;
        $company->save();
        Flash::success('更新成功');
        return Redirect::to('/user/center/companies');
    }

    public function onDeleteCompany()
    {
        if (!Auth::check()) {
            return null;
        }
        $user = Auth::getUser();

        $company = UserCompany::find(post('id'));

        if ($user->id == $company->user_id) {
            $company->delete();
            Flash::success('成功删除');
            return Redirect::refresh();
        } else {
            Flash::error('你没有权限删除该公司');
            return Redirect::refresh();
        }

    }


}
