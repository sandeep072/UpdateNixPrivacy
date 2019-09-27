<!DOCTYPE HTML>

<html>
<head>
	<title></title>
  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.boot strapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top navbar-default">
  <a href="dashboard.php"><img src="nix.png" alt="nix" style="width: 45px;height: 45px;"></a>
  <a class="navbar-brand" href="#" style="color: white">Nix Privacy</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<div class="container-fluid">
  <div class="row">

<div class="vertical-menu">
 <div class="dropdown">
    <button class="btn btn-md" type="button" data-toggle="dropdown">Self Assessment
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="demo_control.php">Controller Processor</a></li>
      <li><a href="principle.php">Principles Alignment</a></li>
      <li><a href="details.php">Detailed Assessment</a></li>
    </ul>
    </div>
    <div class="dropdown">
    <button class="btn" type="button" data-toggle="dropdown">GDPR Internal Audit
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="plan1.html">Plan Audit</a></li>
      <li><a href="#">Review Audit</a></li>
      <li><a href="#">Report</a></li>
      <li><a href="#">Action Plan</a></li>
    </ul>
</div>
  <div class="dropdown">
    <button class="btn" type="button" data-toggle="dropdown">Data Mapping
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="datat.php">Type of data</a></li>
      <li><a href="#">Mapping</a></li>
    </ul>
</div>
</div> 
 <div class="container bg-light ">
  <div class="row">

    <div class="col-md-6">
<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
    </div>

     <div class="col-md-6">
<div id="container1" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
    </div>

     <div class="col-md-6" style="padding-top: 20px;">
      <div id="container2" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
    </div>

     <div class="col-md-6" style="padding-top:20px;">
      <div id="container3" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
    </div>



     <div class="col-md-6">
<div id="container4" style="min-width: 310px; height: 400px; padding-top: 20px; max-width: 600px; margin: 0 auto"></div>
    </div>

     <div class="col-md-6">
      <div id="container5" style="min-width: 310px; height: 400px;padding-top: 20px; max-width: 600px; margin: 0 auto"></div>
    </div>

     <div class="col-md-6" style="padding-top:20px;">
      <div id="container6" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
    </div>

<script type="text/javascript">
  Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Controller  Checklist, 2019'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: '  Lawfulness, fairness and transparency',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: '  Individual Rights',
            y: 11.84
        }, {
            name: ' Accountability and governance ',
            y: 10.85
        }, {
            name: ' Data security, international transfers and breaches',
            y: 4.67          
            
        }]
    }]
});
</script>



<script type="text/javascript">
  Highcharts.chart('container1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Processor Checklist, 2019'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        
        colorByPoint: true,
        data: [{
            name: ' Documentation',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: 'Individual Rights',
            y: 11.84
        }, {
            name: ' Accountability and governance ',
            y: 10.85
        }, {
            name: ' Data security',
            y: 4.67
       
         
        }]
    }]
});
</script>

<script type="text/javascript">
  
  Highcharts.chart('container2', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Information Checklist, 2019'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: ' Management and organisational information security',
            y: 80.41,
            sliced: true,
            selected: true
        }, {
            name: '   Your staff and information security awareness',
            y: 11.84
        }, {
            name: '  Physical security ',
            y: 10.85
        }, {
            name: ' Computer and network security',
            y: 4.67   
        },{
           name:'Personal data breach management',    
             y: 5.67  
        }]
    }]
});
</script>


<script type="text/javascript">
  
  Highcharts.chart('container3', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Direct Marketing, 2019'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Direct Marketing',
            y: 61.41,
            sliced: true,
            selected: true
        }, 
           {
            name: 'Other',
            y: 2.61
        }]
    }]
});
</script>


<script type="text/javascript">
  Highcharts.chart('container4', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Records Management, 2019'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Management and organisational records management',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: 'Records creation and maintenance',
            y: 11.84
        }, {
            name: 'Tracking and offsite storage',
            y: 10.85
        }, {
            name: 'Access to records',
            y: 4.67          
            
        }]
    }]
});
</script>
<script type="text/javascript">
  Highcharts.chart('container5', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Data Sharing And Subject Access, 2019'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Data sharing governance',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: 'Data sharing records',
            y: 11.84
        }, {
            name: '   Notification ',
            y: 10.85
        }, {
            name: '  Security',
            y: 4.67     
            },
            {
            name: '   Right of access',
            y: 10.85
    
            
        }]
    }]
});
</script>
<script type="text/javascript">
  Highcharts.chart('container6', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'CCTV, 2019'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Installing a system',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: '    Management',
            y: 11.84
        }, {
            name: ' Operation',
            y: 10.85
        }, {
            name: 'Public awareness and signage',
            y: 4.67          
            
        }]
    }]
});
</script>


 


</div>
</div>
</body>
</html>
