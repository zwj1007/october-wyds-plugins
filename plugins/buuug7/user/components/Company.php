<?php namespace Buuug7\User\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;
use RainLab\User\Facades\Auth;
use Validator;
use ValidationException;
use Buuug7\User\Models\Company as UserCompany;
use Flash;
use Redirect;

class Company extends ComponentBase
{
    public $canCompany = true;

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
        $company = $this->loadUserRelatedCompany();
        if ($company) {
            $component = $this->addComponent(
                'NetSTI\Uploader\Components\ImageUploader',
                'imageUploader',
                [
                    'modelClass' => 'Buuug7\User\Models\Company',
                    'modelKeyColumn' => 'avatar',
                    'deferredBinding' => false,
                    'imageWidth' => '200',
                    'imageHeight' => '200',
                ]
            );

            $component->bindModel('avatar', $company);
        }
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => '公司别名',
                'description' => '公司别名',
                'default' => '{{ :slug }}',
                'type' => 'string',
            ],
        ];
    }

    public function onRun()
    {
        $this->page['companies'] = $this->listCheckedCompanies();
        $this->page['company'] = $this->loadCompany();
        $this->page['userRelatedCompany'] = $this->loadUserRelatedCompany();
        $this->page['featuredCompanies'] = $this->listFeaturedCompanies();
    }

    public function loadCompany()
    {
        $slug = $this->property('slug');
        $company = UserCompany::where('slug', $slug)->isChecked()->first();
        return $company;
    }

    public function listCheckedCompanies()
    {
        return UserCompany::isChecked()->orderBy('checked_at', 'desc')->get();
    }

    public function listFeaturedCompanies()
    {
        return UserCompany::isChecked()->isFeatured()->orderBy('checked_at', 'desc')->get();
    }


    /**
     * return the logged user company information
     */
    public function loadUserRelatedCompany()
    {
        if (!Auth::check()) {
            return null;
        }
        return Auth::getUser()->company()->first();

    }

    public function onCreateCompany()
    {

        if (!$this->canCompany) {
            throw new ApplicationException('你的账号不允许提交公司认证信息');
        }
        $company = new UserCompany();
        /*if (!UserCompany::create($data)) {
            throw new ApplicationException('提交数据出错');
        }*/
        $company->name = post('name');
        $company->slug = post('slug');
        $company->address = post('address');
        $company->contact_phone = post('contact_phone');
        $company->description = post('description');
        $company->checked = false;
        $company->status = 'committed';
        $company->user_id = Auth::getUser()->id;
        $company->save();
        Flash::success('信息已经提交');

        return Redirect::refresh();
        // return Redirect::back()->withInput();
    }

    public function onUpdateCompany()
    {
        $company = $this->loadUserRelatedCompany();
        $company->name = post('name');
        $company->slug = post('slug');
        $company->address = post('address');
        $company->contact_phone = post('contact_phone');
        $company->description = post('description');
        $company->status = 'committed';
        $company->checked = false;
        $company->not_passed_message = null;
        $company->save();
        Flash::success('信息已经提交');
        return Redirect::refresh();
    }

    public function onDeleteCompany()
    {

    }


}
