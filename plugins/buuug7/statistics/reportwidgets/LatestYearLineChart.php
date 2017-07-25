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

        $from = '2017-01-01';
        $to = '2017-12-31';
        $groupBy = '%Y-%m-%d';
        $type = 'sum';

        $result = StatisticOne::getAnalysisByDateRange($from, $to, $groupBy);

        // average of each data
        $rowAvgBuy = null;
        $rowAvgSales = null;
        $rowAvgPovertyTotal = null;
        $rowAvgTotal = null;

        // sum of each data
        $rowSumBuy = null;
        $rowSumSales = null;
        $rowSumPovertyTotal = null;
        $rowSumTotal = null;

        $last = end($result);

        foreach ($result as $k => $v) {
            $time = strtotime($v->dates) * 1000;
            if ($last == $v) {
                if ($type == 'avg') {
                    $rowAvgBuy .= '[' . $time . ',' . $v->avgBuy . ']';
                    $rowAvgSales .= '[' . $time . ',' . $v->avgSales . ']';
                    $rowAvgPovertyTotal .= '[' . $time . ',' . $v->avgPovertyTotal . ']';
                    $rowAvgTotal .= '[' . $time . ',' . $v->avgTotal . ']';
                }
                if ($type == 'sum') {
                    $rowSumBuy .= '[' . $time . ',' . $v->sumBuy . ']';
                    $rowSumSales .= '[' . $time . ',' . $v->sumSales . ']';
                    $rowSumPovertyTotal .= '[' . $time . ',' . $v->sumPovertyTotal . ']';
                    $rowSumTotal .= '[' . $time . ',' . $v->sumTotal . ']';
                }

            } else {
                if ($type == 'avg') {
                    $rowAvgBuy .= '[' . $time . ',' . $v->avgBuy . '],';
                    $rowAvgSales .= '[' . $time . ',' . $v->avgSales . '],';
                    $rowAvgPovertyTotal .= '[' . $time . ',' . $v->avgPovertyTotal . '],';
                    $rowAvgTotal .= '[' . $time . ',' . $v->avgTotal . '],';
                }
                if ($type == 'sum') {
                    $rowSumBuy .= '[' . $time . ',' . $v->sumBuy . '],';
                    $rowSumSales .= '[' . $time . ',' . $v->sumSales . '],';
                    $rowSumPovertyTotal .= '[' . $time . ',' . $v->sumPovertyTotal . '],';
                    $rowSumTotal .= '[' . $time . ',' . $v->sumTotal . '],';
                }

            }
        }

        $this->vars['type']=$type;

        if($type == 'avg'){
            $this->vars['rowAvgBuy'] = $rowAvgBuy;
            $this->vars['rowAvgSales'] = $rowAvgSales;
            $this->vars['rowAvgPovertyTotal'] = $rowAvgPovertyTotal;
            $this->vars['rowAvgTotal'] = $rowAvgTotal;
        }

        if($type == 'sum'){
            $this->vars['rowSumBuy'] = $rowSumBuy;
            $this->vars['rowSumSales'] = $rowSumSales;
            $this->vars['rowSumPovertyTotal'] = $rowSumPovertyTotal;
            $this->vars['rowSumTotal'] = $rowSumTotal;
        }

    }
}

