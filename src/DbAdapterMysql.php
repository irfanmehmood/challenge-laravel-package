<?php
/**
 * Adapter MySql
 *
 * PHP version 7
 * DbAdapterMysql.php
 * 
 * @category Reports
 * @package  Streamgo
 * @author   Irfan Mehmood <irfmehmood@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/irfanmehmood/testLaravelReports
 */
namespace Streamgo\Reports;

/**
 * Adapter MySql Class
 * 
 * @category Reports
 * @package  Streamgo
 * @author   Irfan Mehmood <irfmehmood@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/irfanmehmood/testLaravelReports
 */
class DbAdapterMysql extends DbAbstract
{
    protected $db = null;

    /**
     * Constructor
     *
     * @param $dsn  connection string
     * @param $user username for connection
     * @param $pass password for connection
     * 
     * @return none
     */
    public function __construct($dsn, $user = '', $pass = '')
    {
        $this->db = new PDO($dsn, $user, $pass);
    }

    /**
     * Query method to build get data
     * 
     * @param $sReportType Report type
     * 
     * @return array
     */
    public function query(String $sReportType)
    {
        $data = null;

        switch ($sReportType) {
        case ReportType::DAILY
                $data = $this->db->query('select * from coins');
            break;
        case ReportType::WEKLY
                $data = $this->db->query('select * from coins');
            break;
        case ReportType::MONTHLY
                $data = $this->db->query('select * from coins');
            break;
        }

        return $data;
    }
}
