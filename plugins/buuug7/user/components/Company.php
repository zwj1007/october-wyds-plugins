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

    public $rules = [
        'name' => 'required',
        'slug' => ['required', 'unique:buuug7_user_companies'],
        'address' => 'required',
        'contact_phone' => 'required',
        'description' => 'required',
        // 'status' => 'required',
    ];

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
        $company = $this->company();
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
        return [];
    }

    public function onRun()
    {
        $this->page['company'] = $this->company();
        $this->page['companies']=$this->listCheckedCompany();
    }

    public function listCheckedCompany()
    {
        return UserCompany::isChecked()->paginate(1);
    }


    /**
     * return the logged user company information
     */
    public function company()
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
        $data = post();

        /*        $validation = Validator::make($data, $this->rules);
                if ($validation->fails()) {
                    throw new ValidationException($validation);
                }*/
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
        $company = $this->company();
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
