#### How to install ReportBuilder package in your Laravel project ####
<br/>
##### Update your composer.json file by adding the entries below #####

"require": {
        "streamgo/reports": "master"
},
<br/>
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/irfanmehmood/testLaravelReports.git"
        }
],

##### Install Package via composer #####
$ composer update


#### How to test/use Package ####
use Streamgo\Reports\ReportBuilder;
use Streamgo\Reports\DbAdapterEloquent;
use Streamgo\Reports\DbAdapterMysql;
use Streamgo\Reports\ReportType;

Route::get('/eloquent-report', function() {
    $report = new ReportBuilder(ReportType::DAILY, new DbAdapterEloquent());
    $dailyReport = $report->build()->get();
    $dailyReportJsonExport = $report->build()->export();
    dd($dailyReport);
    dd($dailyReportJsonExport);
});

Route::get('/mysql-report', function() {
    $report = new ReportBuilder(ReportType::Daily, new DbAdapterMysql(config('mysql')));
    $dailyReport = $report->build()->get();
    $dailyReportJsonExport = $report->build()->export();
    dd($dailyReport);
    dd($dailyReportJsonExport);
});

