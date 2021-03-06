<?php namespace Buuug7\User\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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
    protected $fillable = [
        'title', 'category', 'description'
    ];

    /*
    * Validation
    */
    public $rules = [
        'title' => 'required',
        'description' => 'required',
    ];

    public $customMessages = [
        'required' => '请填写 :attribute ',
    ];

    public $attributeNames = [
        'title' => '标题',
        'description' => '描述',
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

    public function scopeDisplayFeatured($query, $limit = null)
    {
        if ($limit) {
            return $query->isChecked()->isFeatured()->orderBy('checked_at', 'desc')->limit($limit)->get();
        } else {
            return $query->isChecked()->isFeatured()->orderBy('checked_at', 'desc')->paginate(10);
        }

    }

    public function scopeDisplayChecked($query, $limit = null)
    {
        if ($limit) {
            return $query->isChecked()->orderBy('checked_at', 'desc')->limit($limit)->get();
        }
        return $query->isChecked()->orderBy('checked_at', 'desc')->paginate(5);
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
        return $query->isChecked()->where('category', $categorySlug)->orderBy('checked_at', 'desc')->paginate(5);
    }

    public function scopeSearch($query, $search)
    {
        $searchableFields = ['title'];
        return $query->isChecked()->searchWhere($search, $searchableFields)->paginate(15);
    }

    public static function getCategories()
    {
        return [
            'zhaopin' => '招聘',
            'fangchan' => '房产',
            'ershou' => '二手',
            'chongwu' => '宠物',
            'bendifuwu' => '本地服务',
            'jiaoyou' => '交友',
            'qita' => '其他',
        ];
    }

    public function getCategoryOptions()
    {
        return self::getCategories();
    }

    /**
     * 按照分类取出取出所有的信息
     * @param null $limit
     * @return array
     */
    public static function getAllNeedsGroupedByCategory($limit = null)
    {
        $out = null;
        foreach (self::getCategories() as $k => $v) {
            if ($limit) {
                $out[$k]['name'] = $v;
                $out[$k]['data'] = self::displayByCategory($k, $limit);
            } else {
                $out[$k]['name'] = $v;
                $out[$k]['data'] = self::displayByCategory($k);
            }
        }
        return $out;
    }


    public static function scopeLoadMore($query, $offset)
    {
        $count = DB::table('buuug7_user_needs')->count();
        $data = $query->isChecked()->orderBy('checked_at', 'desc')->offset($offset)->limit(5)->get();
        //   Log::info($offset);
        return [$offset + 5, $data];
    }

}
