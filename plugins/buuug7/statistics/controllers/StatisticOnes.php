<?php namespace Buuug7\Statistics\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Buuug7\Statistics\Models\StatisticOne;
use Buuug7\Statistics\ReportWidgets\LatestYearLineChart;
use Illuminate\Support\Facades\Redirect;
use October\Rain\Support\Facades\Flash;

/**
 * Statistic Ones Back-end Controller
 */
class StatisticOnes extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ImportExportController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $importExportConfig= 'config_import_export.yaml';
    public $requiredPermissions = ['buuug7.statistics.access_statistic_one'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Buuug7.Statistics', 'statistics', 'statisticones');
        $latestYearLineChart = new LatestYearLineChart($this);
        $latestYearLineChart->alias = 'latestYearLIneChart';
        $latestYearLineChart->bindToController();
    }

    public function update($recordId = null)
    {
        return $this->asExtension('FormController')->update($recordId);
    }


    public function analysis()
    {
        $this->pageTitle = '数据分析';
        return $this->makePartial('analysis');
    }

    public function onAnalysis()
    {
        trace_log(post());
        if (!post('from')) {
            Flash::error('请选择开始日期');
            return Redirect::refresh();
        }
        if (!post('to')) {
            Flash::error('请选择结束日期');
            return Redirect::refresh();
        }

        $result = StatisticOne::getAnalysisByDateRange(post('from'), post('to'), post('groupby'));

        $last = end($result);

        // average of each data
        $rowAvgBuy = null;
        $rowAvgSales = null;
        $rowAvgPovertyTotal=null;
        $rowAvgTotal=null;

        // sum of each data
        $rowSumBuy=null;
        $rowSumSales=null;
        $rowSumPovertyTotal=null;
        $rowSumTotal=null;

        foreach ($result as $k => $v) {
            $time = strtotime($v->dates) * 1000;
            if ($last == $v) {
                if(post('type') == 'avg'){
                    $rowAvgBuy .= '[' . $time . ',' . $v->avgBuy . ']';
                    $rowAvgSales .= '[' . $time . ',' . $v->avgSales . ']';
                    $rowAvgPovertyTotal .= '[' . $time . ',' . $v->avgPovertyTotal . ']';
                    $rowAvgTotal .= '[' . $time . ',' . $v->avgTotal . ']';
                }
                if(post('type') == 'sum'){
                    $rowSumBuy .= '[' . $time . ',' . $v->sumBuy . ']';
                    $rowSumSales .= '[' . $time . ',' . $v->sumSales . ']';
                    $rowSumPovertyTotal .= '[' . $time . ',' . $v->sumPovertyTotal . ']';
                    $rowSumTotal .= '[' . $time . ',' . $v->sumTotal . ']';
                }

            } else {
                if(post('type') == 'avg'){
                    $rowAvgBuy .= '[' . $time . ',' . $v->avgBuy . '],';
                    $rowAvgSales .= '[' . $time . ',' . $v->avgSales . '],';
                    $rowAvgPovertyTotal .= '[' . $time . ',' . $v->avgPovertyTotal . '],';
                    $rowAvgTotal .= '[' . $time . ',' . $v->avgTotal . '],';
                }
                if(post('type') == 'sum'){
                    $rowSumBuy .= '[' . $time . ',' . $v->sumBuy . '],';
                    $rowSumSales .= '[' . $time . ',' . $v->sumSales . '],';
                    $rowSumPovertyTotal .= '[' . $time . ',' . $v->sumPovertyTotal . '],';
                    $rowSumTotal .= '[' . $time . ',' . $v->sumTotal . '],';
                }

            }
        }

        if(post('type') == 'avg'){
            $this->vars['rowAvgBuy'] = $rowAvgBuy;
            $this->vars['rowAvgSales'] = $rowAvgSales;
            $this->vars['rowAvgPovertyTotal'] = $rowAvgPovertyTotal;
            $this->vars['rowAvgTotal'] = $rowAvgTotal;
        }

        if(post('type') == 'sum'){
            $this->vars['rowSumBuy'] = $rowSumBuy;
            $this->vars['rowSumSales'] = $rowSumSales;
            $this->vars['rowSumPovertyTotal'] = $rowSumPovertyTotal;
            $this->vars['rowSumTotal'] = $rowSumTotal;
        }

        $this->vars['type']=post('type');
        return [
            '#result' => $this->makePartial('analysis-result'),
        ];
    }
}
