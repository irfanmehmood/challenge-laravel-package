<?php
namespace Streamgo\Reports;
use Illuminate\Support\Facades\DB;

class DbAdapterEloquent extends DbAbstract
{
    public function query(String $reportType)
    {
        $reportsData = null;

        switch ($reportType) {
            case ReportType::Daily:
                $reportsData = DB::table('coins')->get();
                break;
            case ReportType::Weekly:
                $reportsData = DB::table('coins')->get();
                break;
            case ReportType::Monthly:
                $reportsData = DB::table('coins')->get();
                break;
        }

        return $reportsData;
    }
}