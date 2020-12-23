<?php
namespace Streamgo\Reports;
use Exception;

class ReportBuilder implements ReportBuilderInterface
{

    protected $reportType = null;
    protected $reportData = null;
    protected $dbAdapter = null;

    /**
     * Constructor
     *
     * @param String $sReportType Report type to generate, daily, weekly
     * @param DbAbstract $dbAdapter Database adpater to perform query
     * 
     * @return none
     */
    public  function __construct(String $sReportType, DbAbstract $dbAdapter) 
    {
        $this->dbAdapter = $dbAdapter;

        // Check, if report type passed is allowed as a value
        if (defined("Streamgo\Reports\ReportType::$sReportType")) {
            $this->reportType = $sReportType;
        } else {
            // Throw an exception if no valid report type is provided
            $this->throwError("Invalid value '$sReportType' for ReportType.");
        }
    }
    
    /**
     * SetReportType. Change report type of class
     *
     * @param String $sReportType Value specificying Report type
     * 
     * @return none
     */
    public function setReportType(String $sReportType)
    {
        // Check if selected report type exists as an enumeration
        if (defined("Streamgo\Reports\ReportType::$sReportType")) {
            $this->reportType = $sReportType;
        } else {
            // Throw an exception if no valid report type is provided
            $this->throwError("Invalid value '$sReportType' for ReportType.");
        }
    }

    /**
     * Build the data based on report type selected/given
     * 
     * @return mix
     */
    public function build()
    {
        $this->reportData = $this->dbAdapter->query($this->reportType);
        return $this;
    }

    /**
     * Returns report data
     *
     * @param Boolean $getAsCollection Returns either collection or Arrays List
     * 
     * @return mix
     */
    public function get(Bool $getAsCollection = true)
    {
        // Return data as a collection or array
        if ($this->reportData) {
            return $getAsCollection ? $this->reportData : $this->reportData->all();
        } else {
            $this->throwError("No data is available");
        }
    }

    /**
     * Export data to JSOn format
     * 
     * @return mix
     */
    public function export()
    {
        if ($this->reportData) {
            return json_encode($this->reportData->all());
            // return $exporter->export();
        } else {
            // Throw an exception if no data was availabe 
            $this->throwError("No data is available");
        } 
    }
}