<?php namespace Buuug7\Search\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use October\Rain\Exception\ValidationException;

class Search extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Search Component',
            'description' => 'No description provided yet...'
        ];
    }


    public function onSearch(){
        $data=post();
        
        $rules=[
            'search' => 'required',
        ];

        $validation=Validator::make($data,$rules);
        if($validation->fails()){
            throw new ValidationException($validation);
        }else{
            $category=post('category');
            $q=post('search');
            return Redirect::to();
        }

        Log::info($data);
    }
}
