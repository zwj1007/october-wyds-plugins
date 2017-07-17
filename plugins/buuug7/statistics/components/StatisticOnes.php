<?php namespace Buuug7\Statistics\Components;

use Carbon\Carbon;
use Cms\Classes\ComponentBase;
use Buuug7\Statistics\Models\StatisticOne as StatisticOneModel;
use Flash;
use Redirect;
use RainLab\User\Facades\Auth;

class StatisticOnes extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'StatisticOnes Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['statisticOnes'] = $this->loadStatisticOnes();
        $this->page['currentMonthStatisticOnes'] = $this->loadCurrentMonthStatisticOnes();
        $this->page['currentYearStatisticOnes'] = $this->loadCurrentYearStatisticOnes();
    }

    public function loadStatisticOnes()
    {
        if (!Auth::check()) {
            return null;
        }
        $user = Auth::getUser();
        return $user->statisticOnes()->orderBy('published_at', 'desc')->paginate(20);
    }

    public function loadCurrentMonthStatisticOnes()
    {
        if (!Auth::check()) {
            return null;
        }
        $user = Auth::getUser();
        $time = Carbon::now();
        return $user->statisticOnes()
            ->whereYear('published_at', '=', $time->year)
            ->whereMonth('published_at', '=', $time->month)
            ->orderBy('published_at', 'asc')
            ->get();
    }

    public function loadCurrentYearStatisticOnes()
    {
        if (!Auth::check()) {
            return null;
        }
        $user = Auth::getUser();
        $time = Carbon::now();
        return $user->statisticOnes()
            ->whereYear('published_at', '=', $time->year)
            ->orderBy('published_at', 'asc')
            ->get();
    }


    public function onAddStatistic()
    {
        if (!Auth::check()) {
            return;
        }

        $total = $this->parseValue(post('buy')) + $this->parseValue(post('sales'));

        // make sure poverty_total  less than buy+sales
        if ($this->parseValue(post('buy')) + $this->parseValue(post('sales')) < $this->parseValue(post('poverty_total'))) {
            Flash::error('贫困电商交易额不能大于购进和外销的和');
            return Redirect::refresh();
        }

        StatisticOneModel::create([
            'buy' => post('buy'),
            'sales' => post('sales'),
            'poverty_total' => post('poverty_total'),
            'total' => $total,
            'published_at' => post('published_at'),
            'user_id' => post('user_id'),
        ]);
        Flash::success('统计数据提交成功');
        //s  return Redirect::to('/user/center/statisticones');
    }

    /*
     * helper function
     * */
    public function parseValue($value)
    {
        if (!$value) {
            return 0;
        } else {
            return $value;
        }
    }
}
