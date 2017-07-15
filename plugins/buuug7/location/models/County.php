<?php namespace Buuug7\Location\Models;

use Model;

/**
 * County Model
 */
class County extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'buuug7_location_counties';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
      'name', 'code'
    ];

    public $rules = [
        'name' => 'required',
        'code' => 'unique:buuug7_location_counties',
    ];

    public $customMessages = [
        'required' => '请填写 :attribute ',
    ];

    public $attributeNames = [
        'name' => '名称',
        'code' => '代码',
    ];

    public $timestamps = false;

    /**
     * @var array Relations
     */
    public $belongsTo = [
      'city' =>['Buuug7\Location\Models\City'] ,
    ];

    protected static $nameList = [];

    public static function getNameList($cityId){
      if (isset(self::$nameList[$cityId])){
        return self::$nameList[$cityId];
      }
      return self::$nameList[$cityId] = self::whereCityId($cityId)->lists('name', 'id');
    }

    public function beforeValidate(){
        $city_id=input('city_id');
        $this->city_id=$city_id;
        //trace_log($data);
    }

    public function beforeSave(){
        $city_id=input('city_id');
        if($city_id){
            $this->city_id = $city_id;
        }
    }


}
