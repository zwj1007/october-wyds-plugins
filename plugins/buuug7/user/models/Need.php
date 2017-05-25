<?php namespace Buuug7\User\Models;

use Carbon\Carbon;
use Model;
use ValidationException;

/**
 * Need Model
 */
class Need extends Model
{
    use \October\Rain\Database\Traits\Validation;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'buuug7_user_needs';

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
        'title' => 'required',
        'contact_phone' => 'required',
        'description' => 'required',
    ];

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'user' => ['RainLab\User\Models\User'],
    ];

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

    public function scopeDisplayFeatured($query, $limit)
    {
        return $query->isChecked()->isFeatured()->orderBy('checked_at', 'desc')->limit($limit)->get();
    }

    public function scopeDisplayChecked($query, $limit = null)
    {
        if ($limit) {
            return $query->isChecked()->orderBy('checked_at', 'desc')->limit($limit)->get();
        }
        return $query->isChecked()->orderBy('checked_at', 'desc')->paginate(15);

    }

    public static function findById($id)
    {
        return self::where(['checked' => true, 'id' => $id,])->first();
    }

    public function scopeDisplayByCategory($query, $categorySlug, $limit = null)
    {
        if ($limit) {
            return $query->isChecked()->where('category', $categorySlug)->orderBy('checked_at', 'desc')->limit($limit)->get();
        }
        return $query->isChecked()->where('category', $categorySlug)->orderBy('checked_at', 'desc')->paginate(4);
    }

    public function scopeSearch($query, $search)
    {
        $searchableFields=['title'];
        return $query->isChecked()->searchWhere($search,$searchableFields)->paginate(15);
    }

    public static function getCategories()
    {
        return [
            'zhaopin' => '招聘',
            'fangchan' => '房产',
            'ershou' => '二手',
            'qita' => '其他',
        ];
    }

}
