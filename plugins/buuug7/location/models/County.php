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

    /**
     * Validation
     */
    public $rules = [
        'name' => 'required',
        'code' => 'required|unique:buuug7_location_counties',
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
    public $hasMany = [
        'towns' => ['Buuug7\Location\Models\Town'],
    ];
    public $hasManyThrough = [
        'villages' => [
            'Buuug7\Location\Models\Village',
            'through' => 'Buuug7\Location\Models\Town',
        ],
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];


    protected static $nameList = null;

    public static function getNameList()
    {
        if (self::$nameList) {
            return self::$nameList;
        }
        return self::$nameList = self::orderBy('name', 'desc')->lists('name', 'id');
    }

    public function afterDelete()
    {
        // delete villages of county
        $this->villages()->delete();
        // delete towns of county
        $this->towns()->delete();
    }
}
