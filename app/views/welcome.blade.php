@section('content')
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview</a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <div id="linechart2"></div>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <div id="linechart3"></div>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
			  <div id="linechart4"></div>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <div id="linechart5"></div>
            </div>
          </div>
          <div class="row">
			  <div class="col-xs-6 col-sm-6">
		          <h2 class="sub-header">Section title</h2>
		          <div id="linechart"></div>
	          </div>
	          <div class="col-xs-6 col-sm-6">
		          <h2 class="sub-header">Section title</h2>
		          <div id="linechart1"></div>
	          </div>
         </div>
         <div class="row">
			  <div class="col-xs-6 col-sm-6">
		          <h2 class="sub-header">Section title</h2>
		          <div id="linechart6"></div>
	          </div>
	          <div class="col-xs-6 col-sm-6">
		          <h2 class="sub-header">Section title</h2>
		          <div id="linechart7"></div>
	          </div>
         </div>
        </div>
      </div>
    </div>

@stop
@section('footer')
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <script src="js/docs.min.js"></script>
    <script src="js/highcharts.js"</script>
	<script src="js/modules/data.js"</script>

<script type="text/javascript">
 $(function () { 
    $('#linechart').highcharts({
        chart: {
          backgroundColor: '',
            type: 'column'
        },
        title: {
            text: 'Total ticket types'
        },
        xAxis: {
            categories:['Apples', 'Bananas', 'Oranges']
        },
        yAxis: {
            title: {
                text: 'Ticket Types'
            }
        },
        series: [{
            name: 'defect',
            data: [0,10,20,30,40]
        }, {
            name: 'task',
            data: [50,60,70,80,90]
        }, {
            name: 'enhancement',
            data: [100,110,120,130,140]
        }, {
            name: 'suggestion',
            data: [0,50,60,70,0]
        }, {
            name: 'project',
            data: [0,80,90,30,5]
        }
        
        ]
    });
})
</script> 
<script type="text/javascript">
 $(function () { 
    $('#linechart1').highcharts({
        chart: {
          backgroundColor: '',
            type: 'pie'
        },
        title: {
            text: 'Total ticket types by time'
        },
        xAxis: {
            categories:['Apples', 'Bananas', 'Oranges']
        },
        yAxis: {
            title: {
                text: 'Ticket Types'
            }
        },
         plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true
                    },
                    showInLegend: true
                }
            },
        series:[{ 
       data:[
                ['defect',15285],
                ['task',8888],
                ['enhancement',1265],
                ['suggestion',3568],
                ['project',12345]
            ]
        }]
    });
})
</script>
<script type="text/javascript">
$(function () {
 $.getJSON('http://webdmg.com/play/index.php/api/example/topplays?callback=?', function (data){
	var info = data.topPlay;
	console.log(JSON.stringify(info));
    $('#linechart2').highcharts({
        chart: {
          backgroundColor: '',
            type: 'pie'
        },
        title: {
            text: 'Label One'
        },
        xAxis: {
            categories:['Apples', 'Bananas', 'Oranges']
        },
        yAxis: {
            title: {
                text: ''
            }
        },
         plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
        series:[{ 
       data:info          
        }]
    });
});
});
</script>
<script type="text/javascript">
 $(function () { 
    $('#linechart3').highcharts({
   	 chart: {
         backgroundColor: '',
           type: 'pie'
       },
       title: {
           text: 'Label Two'
       },
       xAxis: {
           categories:['Apples', 'Bananas', 'Oranges']
       },
       yAxis: {
           title: {
               text: ''
           }
       },
        plotOptions: {
               pie: {
                   allowPointSelect: true,
                   cursor: 'pointer',
                   dataLabels: {
                       enabled: false
                   },
                   showInLegend: true
               }
           },
       series:[{ 
      data:[
               ['defect',15285],
               ['task',8888],
               ['enh',1265],
               ['sugs',3568]
           ]
       }]
   });
})
</script>
<script type="text/javascript">
 $(function () { 
    $('#linechart4').highcharts({
   	 chart: {
         backgroundColor: '',
           type: 'pie'
       },
       title: {
           text: 'Label Three'
       },
       xAxis: {
           categories:['Apples', 'Bananas', 'Oranges']
       },
       yAxis: {
           title: {
               text: ''
           }
       },
        plotOptions: {
               pie: {
                   allowPointSelect: true,
                   cursor: 'pointer',
                   dataLabels: {
                       enabled: false
                   },
                   showInLegend: true
               }
           },
       series:[{ 
      data:[
               ['defect',15285],
               ['task',8888],
               ['enh',1265],
               ['sugs',3568]
           ]
       }]
   });
})
</script>
<script type="text/javascript">
 $(function () { 
    $('#linechart5').highcharts({
   	 chart: {
         backgroundColor: '',
           type: 'pie'
       },
       title: {
           text: 'Label Four'
       },
       xAxis: {
           categories:['Apples', 'Bananas', 'Oranges']
       },
       yAxis: {
           title: {
               text: ''
           }
       },
        plotOptions: {
               pie: {
                   allowPointSelect: true,
                   cursor: 'pointer',
                   dataLabels: {
                       enabled: false
                   },
                   showInLegend: true
               }
           },
       series:[{ 
      data:[
               ['defect',15285],
               ['task',8888],
               ['enh',1265],
               ['sugs',3568]
           ]
       }]
   });
})
</script>
<script type="text/javascript">
 $(function () { 
    $('#linechart6').highcharts({
        chart: {
          backgroundColor: '',
            type: 'bar'
        },
        title: {
            text: 'Total ticket types'
        },
        xAxis: {
            categories:['Apples', 'Bananas', 'Oranges']
        },
        yAxis: {
            title: {
                text: 'Ticket Types'
            }
        },
        series: [{
            name: 'defect',
            data: [0,10,20,30,40]
        }, {
            name: 'task',
            data: [50,60,70,80,90]
        }, {
            name: 'enhancement',
            data: [100,110,120,130,140]
        }, {
            name: 'suggestion',
            data: [0,50,60,70,0]
        }, {
            name: 'project',
            data: [0,80,90,30,5]
        }
        
        ]
    });
})
</script> 
<script type="text/javascript">
 $(function () { 
    $('#linechart7').highcharts({
        chart: {
          backgroundColor: '',
            type: 'area'
        },
        title: {
            text: 'Total ticket types by time'
        },
        xAxis: {
            categories:['Apples', 'Bananas', 'Oranges']
        },
        yAxis: {
            title: {
                text: 'Ticket Types'
            }
        },
         plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true
                    },
                    showInLegend: true
                }
            },
        series:[{ 
       data:[
                ['defect',15285],
                ['task',8888],
                ['enhancement',1265],
                ['suggestion',3568],
                ['project',12345]
            ]
        }]
    });
})
</script>
<!--<script type="text/javascript">
$(function () {
    $('#linechart2').highcharts({
        data: {
            table: document.getElementById('datatable')
        },
        chart: {
          backgroundColor: '',
            type: 'column'
        },
        title: {
            text: 'Time spent on '
        },
        xAxis: {
            allowDecimals: true,
            title: {
                text: 'Time'
            }
        },
        tooltip: {
            formatter: function() {
                return '<b>'+ this.series.name +'</b><br/>'+
                    this.y +' '+ this.x.toLowerCase();
            }
        }
    });
});
</script>--> 
@stop

