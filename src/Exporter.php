<?php
namespace Streamgo\Reports;


class Exporter
{

    public $data;

    /**
     * Constructor
     *
     * @param $data data to be formatted
     * @param $user username for connection
     * @param $pass password for connection
     * 
     * @return none
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function export()
    {

        $isItLaravelCollection = gettype($this->data) === 'Illuminate\Support\Collection';

        if ($isItLaravelCollection) {
            return $this->exportCollection();
        } else{
            return $this->exportArrayList();
        }
    }

    /**
     * This is used to export Laravel collection 
     */
    protected function exportCollection()
    {

        /** 
         * If we initiated this Report Class with Eloquent as Database layer
         * This function will return Laravel collection otherwise, it will return Arrays 
         */
        return json_encode($this->data);

    }

    /**
     * This is used to export Laravel collection 
     */
    protected function exportArrayList()
    {

        /** 
         * If we initiated this Report Class with Eloquent as Database layer
         * This function will return Laravel collection otherwise, it will return Arrays 
         */
        return json_encode($this->data->toArray());
        
    }
}
