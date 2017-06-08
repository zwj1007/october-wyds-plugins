<?php namespace Buuug7\News\Models;

use Model;

/**
 * Comment Model
 */
class Comment extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'buuug7_news_comments';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'content','user_id'
    ];

    /*
* Validation
*/
    public $rules = [
        'content' => 'required',
    ];


    /**
     * @var array Relations
     */

    public $belongsTo = [
        'post' => [
            'Buuug7\News\Models\Post',
            'table' => 'buuug7_news_comments',
        ],
        'user' => [
            'RainLab\User\Models\User',
            'table' => 'users',
        ],
    ];
}
