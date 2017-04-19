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
        return $query->isChecked()->isFeatured()->limit($limit)->get();
    }


}
