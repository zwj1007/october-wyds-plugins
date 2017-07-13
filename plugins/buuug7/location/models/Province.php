<?php namespace Buuug7\Location\Models;

use Model;

/**
 * Province Model
 */
class Province extends Model
{
    use \October\Rain\Database\Traits\Validation;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'buuug7_location_provinces';

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
        'code' => 'unique:buuug7_location_provinces',
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
    public $hasMany = [
        'cities' => ['Buuug7\Location\Models\City'],
    ];

    protected static $nameList = null;

    public static function getNameList()
    {
        if (self::$nameList) {
            return self::$nameList;
        }
        return self::$nameList = self::orderBy('name', 'desc')->lists('name', 'id');
    }
}
