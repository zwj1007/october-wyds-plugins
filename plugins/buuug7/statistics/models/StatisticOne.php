<?php namespace Buuug7\Statistics\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Model;
use Carbon\Carbon;
use Flash;
use Redirect;

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

    public $customMessages = [
        'required' => '请填写 :attribute ',
        'unique_with' => '同一天内不能提交两次统计数据',
    ];

    public $attributeNames = [
        'buy' => '购进',
        'sales' => '外销',
        'poverty_total' => '贫困村电商交易额',
        'total' => '电商交易额',
        'published_at' => '提交时间',
        'unique_with' => '你今天已经提交过了,一天内不能提交两次统计信息',
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

    protected $dates = ['created_at', 'updated_at', 'published_at'];

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

    public function scopeFilterUser($query, $user)
    {
        return $query->whereHas('user', function ($q) use ($user) {
            $q->whereIn('id', $user);
        });
    }

    public function filterFields($fields, $context = null)
    {
        if ($this->total) {
            $fields->published_at->disabled = true;
        }
    }

    public function beforeValidate()
    {

        $this->published_at = Carbon::parse($this->published_at)->toDateString();
        $flag = DB::table('buuug7_statistics_statistic_ones')->where([
            'user_id' => $this->user_id,
            'published_at' => $this->published_at,
        ])->exists();
        if ($flag) {

            $this->validationErrors->add('published_at', 'sfjlsdjflsd');
            $this->rules['unique_with'] = 'required';
        }
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
