<?php

namespace Streamgo\Reports;

interface ReportBuilderInterface
{

    public function setReportType(String $sReportType);

    public function build();

    public function get();

    public function export();

}