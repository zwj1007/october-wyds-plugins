<?php namespace Buuug7\Statistics\Models;

use Backend\Models\ExportModel;

class StatisticOneExport extends ExportModel
{

    public $table = 'buuug7_statistics_statistic_ones';

    public $belongsTo = [
        'user' => [
            'RainLab\User\Models\User',
            'key' => 'user_id',
        ],
    ];

    protected $appends = [
        'user_email',
        'user_name'
    ];

    public function exportData($columns, $sessionKey = null)
    {
        $result = self::make()
            ->with([
                'user',
            ])
            ->get()
            ->toArray();
        return $result;
    }

    public function getUserEmailAttribute()
    {
        if (!$this->user) {
            return '';
        }
        return $this->user->email;
    }

    public function getUserNameAttribute()
    {
        if (!$this->user) {
            return '';
        }
        return $this->user->name;
    }
}

