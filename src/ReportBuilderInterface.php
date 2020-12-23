<?php
/**
 * Reports Builder Interface
 *
 * PHP version 7
 * ReportBuilderInterface.php
 *
 * @category Reports
 * @package  Streamgo
 * @author   Irfan Mehmood <irfmehmood@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/irfanmehmood/testLaravelReports
 */
namespace Streamgo\Reports;

/**
 * Interface for the Report Builder classes
 *
 * @category Reports
 * @package  Streamgo
 * @author   Irfan Mehmood <irfmehmood@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/irfanmehmood/testLaravelReports
 */
interface ReportBuilderInterface
{

    /**
     * Setter method to select the report type for the builder
     * 
     * @param $sReportType Report type
     * 
     * @return none
     */
    public function setReportType(String $sReportType);

    /**
     * Builder to query the Database
     * 
     * @return mix
     */
    public function build();

    /**
     * Getter method to get data
     * 
     * @return array
     */
    public function get();

    /**
     * Getter method to export data to JSON
     * 
     * @return json
     */
    public function export();

}
