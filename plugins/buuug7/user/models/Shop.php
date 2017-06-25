<?php namespace Buuug7\User\Models;

use Model;
use ValidationException;

/**
 * Shop Model
 */
class Shop extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'name' => 'required',
        'links' => 'required|url',
        'description' => 'required',
        'status' => 'required',
    ];

    public $customMessages = [
        'required' => '请填写 :attribute ',
    ];

    public $attributeNames = [
        'name' => '店铺名称',
        'links' => '店铺地址',
        'description' => '店铺描述',
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'buuug7_user_shops';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'name', 'links', 'description', 'status'
    ];

    protected $dates = ['created_at', 'updated_at', 'checked_at'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'user' => ['RainLab\User\Models\User'],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'avatar' => ['System\Models\File']
    ];
    public $attachMany = [];

    public function getStatusOptions()
    {
        return [
            'un_committed' => '未提交',
            'committed' => '已提交',
            'checking' => '审核中',
            'passed' => '审核通过',
            'not_passed' => '未审核通过',
        ];
    }

    public function afterValidate()
    {
        if ($this->checked && !$this->checked_at) {
            throw new ValidationException([
                'checked_at' => '请选择审核日期'
            ]);
        }
    }

    /**
     * After delete event
     * @return void
     */
    public function afterDelete()
    {

        $this->avatar && $this->avatar->delete();
    }

    public function scopeIsChecked($query)
    {
        return $query
            ->whereNotNull('checked')
            ->where('checked', true)
            ->whereNotNull('checked_at')
            ->where('checked_at', '<', Carbon::now());
    }

    public function scopeIsFeatured($query)
    {
        return $query->where('featured', true);
    }


    /**
     * Returns the public image file path to this user's avatar.
     */
    public function getAvatarThumb($size = 25, $options = null)
    {
        if (is_string($options)) {
            $options = ['default' => $options];
        } elseif (!is_array($options)) {
            $options = [];
        }


        if ($this->avatar) {
            return $this->avatar->getThumb($size, $size, $options);
        } else {
            return 'http://placehold.it/400x200?text=no image';
        }
    }

    public function scopeDisplayChecked($query, $limit)
    {
        return $query->isChecked()->orderBy('checked_at', 'desc')->limit($limit)->get();
    }

    public function scopeDisplayFeatured($query, $limit)
    {
        return $query->isChecked()->isFeatured()->orderBy('checked_at', 'desc')->limit($limit)->get();
    }

    public static function findById($id)
    {
        return self::where(['checked' => true, 'id' => $id,])->first();
    }
}
