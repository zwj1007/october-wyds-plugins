<?php namespace Buuug7\Location\Models;

use Model;

/**
 * City Model
 */
class City extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'buuug7_location_cities';

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
        'province' => ['Buuug7\Location\Models\Province'],
    ];
    public $hasMany = [];

    protected static $nameList = [];

    public static function getNameList($provinceId)
    {
        if (isset(self::$nameList[$provinceId])) {
            return self::$nameList[$provinceId];
        }
        return self::$nameList[$provinceId] = self::whereProvinceId($provinceId)->lists('name', 'id');
    }


}
