<?php namespace Buuug7\Statistics\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Buuug7\Statistics\Models\StatisticOne;
use Carbon\Carbon;

class Test extends ReportWidgetBase
{
    public function render()
    {
        $this->loadData();
        return $this->makePartial('default');
    }

    protected function loadData()
    {
        $rows = null;
        $statisticOnes = StatisticOne::listAnalysis([
           'year' => 2017,
            'month' => 7,
            // 'from' => '2017-07-09',
            //'to' => '2017-07-16ßßß',

        ]);
        //var_dump($statisticOnes);

        $last = end($statisticOnes);
        foreach ($statisticOnes as $k => $v) {
            $a1 = strtotime($v['published_at']) * 1000;
            $a2 = $v['total'];
            if ($last == $v) {
                $rows .= '[' . $a1 . ', ' . $a2 . ']';
            } else {
                $rows .= '[' . $a1 . ', ' . $a2 . '],';
            }
        }
        $this->vars['rows'] = $rows;
    }
}

