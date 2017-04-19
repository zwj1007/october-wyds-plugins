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
    protected $fillable = [];

    /*
    * Validation
    */
    public $rules = [
        'name' => 'required',
        'slug' => ['required', 'unique:buuug7_user_companies'],
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

    protected $dates = ['checked_at'];

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

        // Default is "mm" (Mystery man)
        $default = array_get($options, 'default', 'mm');

        if ($this->avatar) {
            return $this->avatar->getThumb($size, $size, $options);
        } else {
            return '//www.gravatar.com/avatar/' .
                md5(strtolower(trim($this->email))) .
                '?s=' . $size .
                '&d=' . urlencode($default);
        }
    }

    /**
     * After delete event
     * @return void
     */
    public function afterDelete()
    {

        $this->avatar && $this->avatar->delete();
        parent::afterDelete();
    }

    public function scopeDisplayFeatured($query, $limit)
    {
        return $query->isChecked()->isFeatured()->limit($limit)->get();
    }
}
