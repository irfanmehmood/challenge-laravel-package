#### How to install ReportBuilder package in your Laravel project ####
##### Update your composer.json file by adding the entries below #####
```
"require": {
        "streamgo/reports": "master"
},
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/irfanmehmood/testLaravelReports.git"
        }
],
```
##### Update composer, which will fetch package from VCS #####
```
$ composer update
```

#### Add routes to your routes/web.php ####
```
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
    $report = new ReportBuilder(ReportType::DAILY, new DbAdapterMysql(config('mysql')));
    $dailyReport = $report->build()->get();
    $dailyReportJsonExport = $report->build()->export();
    dd($dailyReport);
    dd($dailyReportJsonExport);
});
```

##### Test Functionality #####
```
$ php artisan serve

browser: http://127.0.0.1:8000/eloquent-report
browser: http://127.0.0.1:8000/mysql-report
```
