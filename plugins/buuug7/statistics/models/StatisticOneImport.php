<?php namespace Buuug7\Statistics\Models;

use Backend\Models\ImportModel;
use Exception;

class StatisticOneImport extends ImportModel{

    public $table= 'buuug7_statistics_statistic_ones';

    public $rules = [
        'user_id' => 'required',
        'buy' => 'required',
        'sales' => 'required',
        'poverty_total' => 'required',
        'total' => 'required',
        'published_at' => 'required',
    ];



    public function importData($results, $sessionKey = null)
    {
        //TODO::
    }

}
