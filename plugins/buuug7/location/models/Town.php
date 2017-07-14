<?php namespace Buuug7\Location\Models;

use Model;

/**
 * Town Model
 */
class Town extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'buuug7_location_towns';

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
        'code' => 'unique:buuug7_location_cities',
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
      'county' => ['Buuug7\Location\Models\County'],
    ];

    protected static $nameList = [];

    public static function getNameList($countyId)
    {
        if (isset(self::$nameList[$countyId])) {
            return self::$nameList[$countyId];
        }
        return self::$nameList[$countyId] = self::whereCountyId($countyId)->lists('name', 'id');
    }

}
