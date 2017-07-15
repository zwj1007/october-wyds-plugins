<?php namespace Buuug7\Location\Models;

use Model;

/**
 * Village Model
 */
class Village extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'buuug7_location_villages';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'name', 'code','town_id'
    ];

    /**
     * Validation
     */
    public $rules = [
        'name' => 'required',
        'code' => 'required|unique:buuug7_location_villages',
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
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'town' => ['Buuug7\Location\Models\Town'],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    protected static $nameList = [];

    public static function getNameList($townId)
    {
        if (isset(self::$nameList[$townId])) {
            return self::$nameList[$townId];
        }
        return self::$nameList[$townId] = self::whereTownId($townId)->lists('name', 'id');
    }
}
