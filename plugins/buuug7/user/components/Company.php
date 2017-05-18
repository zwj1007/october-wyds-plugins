<?php namespace Buuug7\User\Components;

use Cms\Classes\ComponentBase;
use ApplicationException;
use RainLab\User\Facades\Auth;
use Validator;
use ValidationException;
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
        $company = $this->loadCompany();
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
        $this->page['company'] = $this->loadCompany();
    }


    /**
     * return the logged user company information
     */
    public function loadCompany()
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
        Auth::getUser()->company()->create([
            'name' => post('name'),
            'address' => post('address'),
            'contact_phone' => post('contact_phone'),
            'description' => post('description'),
            'detail' => post('detail'),
            'status' => 'committed',
            'checked' => false,
        ]);

        Flash::success('信息已经提交');

        return Redirect::refresh();
    }

    public function onUpdateCompany()
    {
        $company = $this->loadCompany();
        $company->name = post('name');
        $company->address = post('address');
        $company->contact_phone = post('contact_phone');
        $company->description = post('description');
        $company->detail=post('detail');
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
