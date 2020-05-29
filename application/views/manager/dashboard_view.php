<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Dashboard
		<small>View Dashboard</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo site_url() ?>/"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>

<?php

$firstday = 1;

$dateMinusOne     = strtotime('0 months');
$dateMinusTwo     = strtotime('-1 months');
$dateMinusThere   = strtotime('-2 months');
$dateMinusFour    = strtotime('-3 months');
$dateMinusFive    = strtotime('-4 months');
$dateMinusSix     = strtotime('-5 months');
$dateMinusSeven   = strtotime('-6 months');

$monthMinusOne    = cal_days_in_month(CAL_GREGORIAN, date('m', $dateMinusOne), date('yy', $dateMinusOne));
$monthMinusTwo    = cal_days_in_month(CAL_GREGORIAN, date('m', $dateMinusTwo), date('yy', $dateMinusTwo));
$monthMinusThere  = cal_days_in_month(CAL_GREGORIAN, date('m', $dateMinusThere), date('yy', $dateMinusThere));
$monthMinusFour   = cal_days_in_month(CAL_GREGORIAN, date('m', $dateMinusFour), date('yy', $dateMinusFour));
$monthMinusFive   = cal_days_in_month(CAL_GREGORIAN, date('m', $dateMinusFive), date('yy', $dateMinusFive));
$monthMinusSix    = cal_days_in_month(CAL_GREGORIAN, date('m', $dateMinusSix), date('yy', $dateMinusSix));
$monthMinusSeven  = cal_days_in_month(CAL_GREGORIAN, date('m', $dateMinusSeven), date('yy', $dateMinusSeven));


$dayBeforeOne   = date('Y-m', $dateMinusOne)."-".$firstday;
$dayAfterOne    = date('Y-m', $dateMinusOne)."-".$monthMinusOne;

$dayBeforeTwo   = date('Y-m', $dateMinusTwo)."-".$firstday;
$dayAfterTwo    = date('Y-m', $dateMinusTwo)."-".$monthMinusTwo;

$dayBeforeThree = date('Y-m', $dateMinusThere)."-".$firstday;
$dayAfterThree  = date('Y-m', $dateMinusThere)."-".$monthMinusThere;

$dayBeforeFour  = date('Y-m', $dateMinusFour)."-".$firstday;
$dayAfterFour   = date('Y-m', $dateMinusFour)."-".$monthMinusFour;

$dayBeforeFive  = date('Y-m', $dateMinusFive)."-".$firstday;
$dayAfterFive   = date('Y-m', $dateMinusFive)."-".$monthMinusFive;

$dayBeforeSix   = date('Y-m', $dateMinusSix)."-".$firstday;
$dayAfterSix    = date('Y-m', $dateMinusSix)."-".$monthMinusSix;

$dayBeforeSeven = date('Y-m', $dateMinusSeven)."-".$firstday;
$dayAfterSeven  = date('Y-m', $dateMinusSeven)."-".$monthMinusSeven;


$mysqli = new mysqli("localhost","root", "","celestia_dbmtfpsikotes");
$sqlCountUser = '
          SELECT
     	      (SELECT count(user_jenis_kelamin) 
  		        from  cbt_user 
  		        where user_jenis_kelamin = 1) as jumlahLaki,
              (SELECT count(user_jenis_kelamin) 
                from  cbt_user 
                where user_jenis_kelamin = 0) as jumlahPerempuan,
                (SELECT count(`user_id`) 
                  from  cbt_user ) as userCount,
                  (SELECT COUNT(tesuser_id) 
                    from  cbt_tes_user) as userTest,
                    (SELECT COUNT(soal_id) 
                      from  cbt_soal) as soalCount,
                      (SELECT COUNT(topik_id) 
                        from  cbt_topik) as alatTesCount,
                        (SELECT  count(user_id) 
                            FROM    cbt_user
                            WHERE   user_creation_date >= "'.$dayBeforeOne.'"
                            AND     user_creation_date <= "'.$dayAfterOne.'") as reqUserMonthOne,
                          (SELECT  count(user_id) 
                              FROM    cbt_user
                              WHERE   user_creation_date >= "'.$dayBeforeTwo.'"
                              AND     user_creation_date <= "'.$dayAfterTwo.'") as reqUserMonthTwo,
                            (SELECT  count(user_id) 
                                FROM    cbt_user
                                WHERE   user_creation_date >= "'.$dayBeforeThree.'"
                                AND     user_creation_date <= "'.$dayAfterThree.'") as reqUserMonthTheree,
                                (SELECT  count(user_id) 
                                    FROM    cbt_user
                                    WHERE   user_creation_date >= "'.$dayBeforeFour.'"
                                    AND     user_creation_date <= "'.$dayAfterFour.'") as reqUserMonthFour,
                                    (SELECT  count(user_id) 
                                        FROM    cbt_user
                                        WHERE   user_creation_date >= "'.$dayBeforeFive.'"
                                        AND     user_creation_date <= "'.$dayAfterFive.'") as reqUserMonthFive,
                                        (SELECT  count(user_id) 
                                            FROM    cbt_user
                                            WHERE   user_creation_date >= "'.$dayBeforeSix.'"
                                            AND     user_creation_date <= "'.$dayAfterSix.'") as reqUserMonthSix,
                                            (SELECT  count(user_id) 
                                                FROM    cbt_user
                                                WHERE   user_creation_date >= "'.$dayBeforeSeven.'"
                                                AND     user_creation_date <= "'.$dayAfterSeven.'") as reqUserMonthSeven
              
            ';


$sqlReqUser = '
          SELECT  count(user_id) 
          FROM    cbt_user
          WHERE   user_creation_date >= "'.$dayBeforeThree.'"
          AND     user_creation_date <= "'.$dayAfterThree.'"
        ';
        
	if($result = mysqli_query($mysqli, $sqlCountUser)){
		while($row = mysqli_fetch_array($result)){
      $countUser     = $row['userCount'];
      $countPria     = $row['jumlahLaki'];
      $countWanita   = $row['jumlahPerempuan'];
      $countTest     = $row['userTest'];
      $countSoal     = $row['soalCount'];
      $countAlatTest = $row['alatTesCount'];
      $reqMonthOne   = $row['reqUserMonthOne'];
      $reqMonthTwo   = $row['reqUserMonthTwo'];
      $reqMonthThree = $row['reqUserMonthTheree'];
      $reqMonthFour  = $row['reqUserMonthFour'];
      $reqMonthFive  = $row['reqUserMonthFive'];
      $reqMonthSix   = $row['reqUserMonthSix'];
      $reqMonthSeven = $row['reqUserMonthSeven'];
      
		}
  }
  // echo "There were ".date('yy', $dateMinusOne);
  // echo "There were ".$reqMonthOne;
  // echo "There were ".$reqMonthTwo;
  // echo "There were ".$reqMonthThree;
  // echo "There were ".$reqMonthFour;
  // echo "There were ".$reqMonthFive;
  // echo "There were ".$reqMonthSix;
  // echo "There were ".$reqMonthSeven;

?>

<!-- Main content -->
<section class="content">
	<div class="row">
        <div class="col-xs-12">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $countAlatTest;?></h3>

                <p>Alat Tes</p>
              </div>
              <div class="icon">
                <i class="ion ion-briefcase"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $countSoal ?></h3>

                <p>Jumlah Soal</p>
              </div>
              <div class="icon">
                <i class="ion ion-clipboard"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $countUser ?></h3>

                <p>Peserta Terdaftar</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $countTest ?></h3>

                <p>Test Run</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->


      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title">Sales</h3>
                    <a href="javascript:void(0);">View Report</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <p class="d-flex flex-column">
                      <span class="text-bold text-lg">$18,230.00</span>
                      <span>Sales Over Time</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                      <span class="text-success">
                        <i class="fa fa-arrow-up"></i> 33.1%
                      </span>
                      <span class="text-muted">Since last month</span>
                    </p>
                  </div>
                  <!-- /.d-flex -->

                  <div class="position-relative mb-4">
                    <canvas id="sales-chart" height="200"></canvas>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                      <i class="fa fa-square text-primary"></i> This year
                    </span>

                    <span>
                      <i class="fa fa-square text-gray"></i> Last year
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title">Online Store Visitors</h3>
                    <a href="javascript:void(0);">View Report</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <p class="d-flex flex-column">
                      <span class="text-bold text-lg">820</span>
                      <span>Visitors Over Time</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                      <span class="text-success">
                        <i class="fa fa-arrow-up"></i> 12.5%
                      </span>
                      <span class="text-muted">Since last week</span>
                    </p>
                  </div>

                  <div class="position-relative mb-4">
                    <canvas id="visitors-chart" height="200"></canvas>
                  </div>

                  <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                      <i class="fa fa-square text-primary"></i> This Week
                    </span>

                    <span>
                      <i class="fa fa-square text-gray"></i> Last Week
                    </span>
                  </div>
                </div>
              </div>
        </div>
    </div>


    



    <!-- <div class="container-fluid">
        <div class="row">

    <div class="col-lg-6">
      <div class="card">


                  <div class="card-header">
                    <h3 class="card-title">Pie Chart</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    </div>
                  </div>
                  <div class="card-body">
                    <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                  </div>
      </div>
    </div>

    </div>
    </div> -->








    </div>


    <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
          <div class="card">


                <div class="card-header">
                  <h3 class="card-title">Pie Chart</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
                </div>
          </div>

            <div class="col-lg-6">
              <div class="card">


                    <div class="card-header">
                        <h3 class="card-title">Pie Chart</h3>

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                        </div>
                      </div>
                      <div class="card-body">
                        <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      </div>
                      <!-- /.card-body -->
                      </div>


                      
                </div>
              </div>
        </div>
    </div>
    
            <!-- /.card -->
    </div>
    </div>
    </div>

            
</section><!-- /.content -->


<script src="<?php echo base_url(); ?>public/plugins/chart.js/Chart.min.js"></script>

<style>
.bg-info {
    background-color: #17a2b8!important;
}
.small-box {
    border-radius: .25rem;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    display: block;
    margin-bottom: 20px;
    position: relative;
    color: #fff!important;
}

.small-box h3, .col-xl-3 .small-box h3 {
    font-size: 1.6rem;
}

.small-box h3, .col-xl-3 .small-box h3 {
    font-size: 1.6rem;
}

.small-box p {
    font-size: 1.7rem;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
}

.small-box h3 {
    font-size: 4.2rem;
    font-weight: 700;
    margin: 0 0 10px 0;
    padding: 0;
    white-space: nowrap;
}

.small-box>.small-box-footer {
    background: rgba(0,0,0,.1);
    color: rgba(255,255,255,.8);
    display: block;
    padding: 3px 0;
    position: relative;
    text-align: center;
    text-decoration: none;
    z-index: 10;
}

.bg-info>a {
    color: #fff!important;
}

.bg-info>a {
    color: #fff!important;
}


.bg-success, .bg-success>a {
    color: #fff!important;
}

.bg-success {
    background-color: #28a745!important;
}

.bg-warning {
    background-color: #ffc107!important;
}

.bg-warning, .bg-warning>a {
    color: #1f2d3d!important;
}

.bg-danger {
    background-color: #dc3545!important;
}

.bg-danger, .bg-danger>a {
    color: #fff!important;
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-header {
    background-color: transparent;
    border-bottom: 1px solid rgba(0,0,0,.125);
    padding: .75rem 1.25rem;
    position: relative;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
}
.border-0 {
    border: 0!important;
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}

.d-flex {
    display: -ms-flexbox!important;
    display: flex!important;
}

.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}

.position-relative {
    position: relative!important;
}

.chartjs-size-monitor, .chartjs-size-monitor-expand, .chartjs-size-monitor-shrink {
    position: absolute;
    direction: ltr;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    overflow: hidden;
    pointer-events: none;
    visibility: hidden;
    z-index: -1;
}

.chartjs-render-monitor {
    animation: chartjs-render-animation 1ms;
}

.text-lg {
    font-size: 1.25rem!important;
}
.text-bold, .text-bold.table td, .text-bold.table th {
    font-weight: 700;
}

*, ::after, ::before {
    box-sizing: border-box;
}

.text-right {
    text-align: right!important;
}
.ml-auto, .mx-auto {
    margin-left: auto!important;
}

.flex-column {
    -ms-flex-direction: column!important;
    flex-direction: column!important;
}

.justify-content-between {
    -ms-flex-pack: justify!important;
    justify-content: space-between!important;
}

.justify-content-end {
    -ms-flex-pack: end!important;
    justify-content: flex-end!important;
}

.mr-2, .mx-2 {
    margin-right: .5rem!important;
}

.text-gray {
    color: #6c757d;
}

.text-primary {
    color: #007bff!important;
}

.chartjs-render-monitor {
    animation: chartjs-render-animation 1ms;
}



/* line chart */

.card-header {
    background-color: #007bff;
}

.card-title {
    float: left;
    font-size: 1.1rem;
    font-weight: 400;
    margin: 0;
}

.card-tools {
    float: right;
    margin-right: -.625rem;
}

.btn-tool {
    color: rgba(255,255,255,.8);
}

.card-primary:not(.card-outline)>.card-header a {
    color: #fff;
}

.card-header a {
    color: #fff;
}

.card {
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    margin-bottom: 1rem;
}

</style>

<script>
$(function () {
  'use strict'

  var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }

  var mode      = 'index'
  var intersect = true

  var $salesChart = $('#sales-chart')
  var salesChart  = new Chart($salesChart, {
    type   : 'bar',
    data   : {
      labels  : ['JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
      datasets: [
        {
          backgroundColor: '#007bff',
          borderColor    : '#007bff',
          data           : [1000, 2000, 3000, 2500, 2700, 2500, 3000]
        },
        {
          backgroundColor: '#ced4da',
          borderColor    : '#ced4da',
          data           : [700, 1700, 2700, 2000, 1800, 1500, 2000]
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      tooltips           : {
        mode     : mode,
        intersect: intersect
      },
      hover              : {
        mode     : mode,
        intersect: intersect
      },
      legend             : {
        display: false
      },
      scales             : {
        yAxes: [{
          // display: false,
          gridLines: {
            display      : true,
            lineWidth    : '4px',
            color        : 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks    : $.extend({
            beginAtZero: true,

            // Include a dollar sign in the ticks
            callback: function (value, index, values) {
              if (value >= 1000) {
                value /= 1000
                value += 'k'
              }
              return '$' + value
            }
          }, ticksStyle)
        }],
        xAxes: [{
          display  : true,
          gridLines: {
            display: false
          },
          ticks    : ticksStyle
        }]
      }
    }
  })

  var $visitorsChart = $('#visitors-chart')
  var visitorsChart  = new Chart($visitorsChart, {
    data   : {
      labels  : ['18th', '20th', '22nd', '24th', '26th', '28th', '30th'],
      datasets: [{
        type                : 'line',
        data                : [100, 120, 170, 167, 180, 177, 160],
        backgroundColor     : 'transparent',
        borderColor         : '#007bff',
        pointBorderColor    : '#007bff',
        pointBackgroundColor: '#007bff',
        fill                : false
        // pointHoverBackgroundColor: '#007bff',
        // pointHoverBorderColor    : '#007bff'
      },
        {
          type                : 'line',
          data                : [60, 80, 70, 67, 80, 77, 100],
          backgroundColor     : 'tansparent',
          borderColor         : '#ced4da',
          pointBorderColor    : '#ced4da',
          pointBackgroundColor: '#ced4da',
          fill                : false
          // pointHoverBackgroundColor: '#ced4da',
          // pointHoverBorderColor    : '#ced4da'
        }]
    },
    options: {
      maintainAspectRatio: false,
      tooltips           : {
        mode     : mode,
        intersect: intersect
      },
      hover              : {
        mode     : mode,
        intersect: intersect
      },
      legend             : {
        display: false
      },
      scales             : {
        yAxes: [{
          // display: false,
          gridLines: {
            display      : true,
            lineWidth    : '4px',
            color        : 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks    : $.extend({
            beginAtZero : true,
            suggestedMax: 200
          }, ticksStyle)
        }],
        xAxes: [{
          display  : true,
          gridLines: {
            display: false
          },
          ticks    : ticksStyle
        }]
      }
    }
  })
}

)




$(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */



    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    // var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Pria', 
          'Wanita',
      ],
      datasets: [
        {
          data: [<?php echo $countPria; ?>,<?php echo $countWanita; ?>],
          backgroundColor : ['#36d6d9', '#fdc108'],
        }
      ]
    }

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })

    //-------------
    //- BAR CHART -
    //-------------
    // var barChartCanvas = $('#barChart').get(0).getContext('2d')
    // var barChartData = jQuery.extend(true, {}, areaChartData)
    // var temp0 = areaChartData.datasets[0]
    // var temp1 = areaChartData.datasets[1]
    // barChartData.datasets[0] = temp1
    // barChartData.datasets[1] = temp0

    // var barChartOptions = {
    //   responsive              : true,
    //   maintainAspectRatio     : false,
    //   datasetFill             : false
    // }

    // var barChart = new Chart(barChartCanvas, {
    //   type: 'bar', 
    //   data: barChartData,
    //   options: barChartOptions
    // })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    // var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    // var stackedBarChartData = jQuery.extend(true, {}, barChartData)

    // var stackedBarChartOptions = {
    //   responsive              : true,
    //   maintainAspectRatio     : false,
    //   scales: {
    //     xAxes: [{
    //       stacked: true,
    //     }],
    //     yAxes: [{
    //       stacked: true
    //     }]
    //   }
    // }

    // var stackedBarChart = new Chart(stackedBarChartCanvas, {
    //   type: 'bar', 
    //   data: stackedBarChartData,
    //   options: stackedBarChartOptions
    // })
  })

  //====demo aja

  

</script>


