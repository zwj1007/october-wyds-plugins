<?php namespace Buuug7\Statistics\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Buuug7\Statistics\Models\StatisticOne;
use Carbon\Carbon;

class LatestYearLineChart extends ReportWidgetBase
{
    public function render()
    {
        $this->loadData();
        return $this->makePartial('widget');
    }

    protected function loadData()
    {
        $rowsTotal = null;
        $rowsPovertyTotal = null;
        $statisticOnes = StatisticOne::listAnalysis([
            'year' => Carbon::now()->year,
            'month' => '',
            'from' => '',
            'to' => '',
            'towns' => null,
            'users' => null,
        ])->toArray();

        $last = end($statisticOnes);
        foreach ($statisticOnes as $k => $v) {
            $time = strtotime($v['published_at']) * 1000;
            $total = $v['total'];
            $poverty_total=$v['poverty_total'];
            $buy = $v['buy'];
            $sales = $v['sales'];
            if ($last == $v) {
                $rowsTotal .= '[' . $time . ', ' . $total . ']';
                $rowsPovertyTotal .= '[' . $time . ', ' . $poverty_total . ']';
            } else {
                $rowsTotal .= '[' . $time . ', ' . $total . '],';
                $rowsPovertyTotal .= '[' . $time . ', ' . $poverty_total . '],';
            }
        }
        $this->vars['rowsTotal'] = $rowsTotal;
        $this->vars['rowsPovertyTotal']=$rowsPovertyTotal;
    }
}

