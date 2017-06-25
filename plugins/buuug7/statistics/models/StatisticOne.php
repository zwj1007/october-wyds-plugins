<?php namespace Buuug7\Statistics\Models;

use Model;

/**
 * StatisticOne Model
 */
class StatisticOne extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'user_id' => 'required',
        'buy' => 'required|numeric',
        'sales' => 'required|numeric',
        'poverty_total' => 'required|numeric',
        'total' => 'required|numeric',
        'published_at' => 'required',
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'buuug7_statistics_statistic_ones';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

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
    public $attachOne = [];
    public $attachMany = [];

    public function scopeFilterUser($query,$user)
    {
        return $query->whereHas('user',function($q) use ($user){
            $q->whereIn('id',$user);
        });
    }

    public function getTotalOptions()
    {
        if ($this->buy && $this->sales) {
            $value = $this->buy + $this->sales;
            return [
                "$value" => $value
            ];
        } else {
            return [];
        }
    }
}
