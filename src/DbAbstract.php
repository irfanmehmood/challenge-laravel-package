<?php
namespace Streamgo\Reports;

/** 
 * Very basic implementation of our Database abstraction layer 
 * */
abstract class DbAbstract
{
    abstract public function query(String $reportType);
}