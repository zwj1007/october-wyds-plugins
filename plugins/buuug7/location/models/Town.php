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
        'name', 'code',
    ];

    /**
     * Validation
     */
    public $rules = [
        'name' => 'required',
        'code' => 'required|unique:buuug7_location_towns'
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
        'villages' => ['Buuug7\Location\Models\Village'],
    ];
    public $belongsTo = [
        'county' => ['Buuug7\Location\Models\County'],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    protected static $nameList = [];

    public static function getNameList($countyId)
    {
        if (isset(self::$nameList[$countyId])) {
            return self::$nameList[$countyId];
        }
        return self::$nameList[$countyId] = self::whereCountyId($countyId)->lists('name', 'id');
    }

    public function afterDelete()
    {
        $this->villages()->delete();
    }
    
}
