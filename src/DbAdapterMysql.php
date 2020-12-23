<?php
namespace Streamgo\Reports;

class DbAdapterMysql extends DbAbstract
{
    protected $db = null;

    public function __construct($dsn, $user = '', $pass = '')
    {
        $this->db = new PDO($dsn, $user, $pass);
    }

    public function query(String $reportType)  : Object
    {

        $data = null;

        switch ($reportType) {
            case ReportType::Daily
                $data = $this->db->query('select * from coins');
                break;
            case ReportType::Weekly
                $data = $this->db->query('select * from coins');
                break;
            case ReportType::Monthly
                $data = $this->db->query('select * from coins');
                break;
        }

        return $data;
    }
}