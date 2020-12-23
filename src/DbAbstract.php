<?php
/**
 * Abstract Database Adapter
 *
 * PHP version 7
 * DbAbstract.php
 *
 * @category Reports
 * @package  Streamgo
 * @author   Irfan Mehmood <irfmehmood@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/irfanmehmood/testLaravelReports
 */
namespace Streamgo\Reports;

/**
 * Abstract Class Adapter
 *
 * @category Reports
 * @package  Streamgo
 * @author   Irfan Mehmood <irfmehmood@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/irfanmehmood/testLaravelReports
 */
abstract class DbAbstract
{
    /**
     * Query method to builde get data
     * 
     * @param $sReportType Report type
     * 
     * @return array
     */
    abstract public function query(String $sReportType);
}
