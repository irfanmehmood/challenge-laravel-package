<?php
/**
 * Adapter Eloquent
 *
 * PHP version 7
 * DbAdapterEloquent.php
 * 
 * @category Reports
 * @package  Streamgo
 * @author   Irfan Mehmood <irfmehmood@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/irfanmehmood/testLaravelReports
 */
namespace Streamgo\Reports;
use Illuminate\Support\Facades\DB;

/**
 * DB Adapter Eloquent Class
 * 
 * @category Reports
 * @package  Streamgo
 * @author   Irfan Mehmood <irfmehmood@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/irfanmehmood/testLaravelReports
 */
class DbAdapterEloquent extends DbAbstract
{
    /**
     * Query method to build get data
     * 
     * @param $sReportType Report type
     * 
     * @return array
     */
    public function query(String $sReportType)
    {
        $reportsData = null;

        switch ($sReportType) {
            
        case ReportType::DAILY:
            $reportsData = DB::table('coins')->get();
            break;
        case ReportType::WEEKLY:
            $reportsData = DB::table('coins')->get();
            break;
        case ReportType::MONTHLY:
            $reportsData = DB::table('coins')->get();
            break;
        }

        return $reportsData;
    }
}
