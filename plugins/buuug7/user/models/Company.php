<?php namespace Buuug7\User\Models;

use Model;
use Carbon\Carbon;
use ValidationException;

/**
 * Company Model
 */
class Company extends Model
{
    use \October\Rain\Database\Traits\Validation;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'buuug7_user_companies';
    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];
    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'contact_phone',
        'description',
        'detail',
        'status',
        'checked'
    ];
    /*
    * Validation
    */
    public $rules = [
        'name' => 'required',
        'address' => 'required',
        'contact_phone' => 'required',
        'description' => 'required',
        'status' => 'required',
    ];
    /**
     * @var array Relations
     */
    public $belongsTo = [
        'user' => ['RainLab\User\Models\User'],
    ];

    public $attachOne = [
        'avatar' => ['System\Models\File']
    ];

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

    protected $dates = ['created_at', 'updated_at', 'checked_at'];

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

    public function afterValidate()
    {
        if ($this->checked && !$this->checked_at) {
            throw new ValidationException([
                'checked_at' => '请选择审核日期'
            ]);
        }
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
            return 'http://placehold.it/400x200?text=没有添加LOGO';
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
