<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>sqoolz</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?php echo base_url();?>/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>/assets/css/animate.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>/assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>/assets/css/theme/default.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
        <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?php echo base_url();?>/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>/assets/plugins/DataTables/extensions/Scroller/css/scroller.bootstrap.min.css" rel="stylesheet" />
	 <link href="<?php echo base_url();?>/assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
         <script src="<?php echo base_url();?>/assets/js/table-manage-scroller.demo.js"></script>
        <link href="<?php echo base_url();?>/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
        
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url();?>/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="page-container fade page-without-sidebar page-header-fixed page-with-top-menu">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
                                    <a href="index.html" class="navbar-brand text-white f-s-14"><span class="navbar-logo"></span><strong>sqoolz</strong></a>
					<button type="button" class="navbar-toggle" data-click="top-menu-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo base_url();?>/assets/img/user-13.jpg" alt="" /> 
							<span class="hidden-xs">Sam Schwartz</span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
							<li><a href="javascript:;">Edit Profile</a></li>
							<li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
							<li><a href="javascript:;">Calendar</a></li>
							<li><a href="javascript:;">Setting</a></li>
							<li class="divider"></li>
							<li><a href="javascript:;">Log Out</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		
		<!-- begin #top-menu -->
		<div id="top-menu" class="top-menu">
                <!-- begin top-menu nav -->
                <ul class="nav">
                    <li><a href="<?php echo base_url('index');?>"><i class="fa fa-laptop"></i><span>Dashboard</span></a></li>
                    <li class="has-sub active"><a href="<?php echo base_url('users');?>"> <i class="fa fa-user"></i> <span>System users</span></a></li>
                    <li><a href="<?php echo base_url('settings');?>"><i class="fa fa-cog"></i><span>System environment</span></a></li>
                    <li class="menu-control menu-control-left">
                        <a href="#" data-click="prev-menu"><i class="fa fa-angle-left"></i></a>
                    </li>
                    <li class="menu-control menu-control-right">
                    <a href="#" data-click="next-menu"><i class="fa fa-angle-right"></i></a>
                    </li>
                </ul>
            <!-- end top-menu nav -->
		</div>
		<!-- end #top-menu -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Chart</a></li>
				<li class="active">Chart JS</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
                        <div class="row">
                        <div class="col-md-12">
			<div class="widget widget-blog" style="background-color: rgba(0,0,0,0.3);" >
                            <?php if(isset($data)) : foreach($data as $row) :  ?>
                            <?php $idd = $row->pid;?>
			                <div class="widget-blog-cover" >
                                            <ol class="breadcrumb pull-left text-white f-w-700 f-s-12 m-l-100">
                                                <li><?php echo $row->sfirstname?> <?php echo $row->slastname?>, 8a, <?php echo $row->sgender?>,<?php $d = $row->sdob; $date = date('Y-m-d'); $dd = $date - $d; echo $dd; ?> years old</li>
                                             </ol>    
                                        </div>
                            
			                <div class="widget-blog-author" >
			                    <div class="widget-blog-author-image">
			                        <img src="../assets/img/user-10.jpg" alt="">
			                    </div>
			                    <div class="widget-blog-author-info text-inverse" style="margin-top: -1px; margin-left: 7px;">
                                                <a href="<?php echo base_url()?>user/<?php echo $idd;?>" data-toggle="tooltip" data-placement="bottom" title="Home" class="shoshialsa btn btn-circle btn-icon m-t-3 "><i class="fa fa-home  fa-spin  "></i></a>
                                                <a href="<?php echo base_url()?>assessments/<?php echo $idd;?>" data-toggle="tooltip" data-placement="bottom" title="Assessments" class="shoshials btn btn-circle btn-icon  m-l-25 m-t-3" ><i class="fa fa-graduation-cap"></i></a>
                                                <a href="<?php echo base_url()?>disciplines/<?php echo $idd;?>" data-toggle="tooltip" data-placement="bottom" title="Discipline" class="shoshials btn btn-circle btn-icon m-t-3 m-l-25"><i class="fa fa-legal"></i></a>
                                             </div>
                                            
			                </div>
                            
			                <div class="widget-blog-content">
			                 
			                </div>
                            
			            </div>
                            
                        </div>
                        </div>
                        <legend></legend>
                    <div class="row">
		    <!-- begin begin col-8 -->
			<div class="col-md-8">
                            
                            <!-- begin col-8 bar chart-->
                            <div class="">
			        <div class="panel panel-inverse"  >
			            <div class="panel-heading">
                                        <div class="panel-heading-btn pull-right">

                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                                        </div>
                                          <strong><a class="text-white p-l-5 ">classRank: </a><a class="count f-s-11  text-white">24</a>/<a class="text-muted f-s-11">31 </a><i class="fa fa-arrow-circle-up text-muted"></i>
                                                        <a class="text-white p-l-25">gradeRank: </a><a class="count f-s-11 f-w-700 text-white">84</a>/<a class="text-muted f-s-11">110 </a> <i class="fa fa-arrow-circle-down text-muted"></i>
                                                        <a class="text-white p-l-25">schoolRank: </a><a class="count f-s-11  text-white">230</a>/<a class="text-muted f-s-11">622 </a> <i class="fa fa-arrow-circle-up text-muted"></i></strong>
                                         
			            </div>
			            <div class="panel-body panel-inverse">
			                <div id="nv-multi-bar-chart" class="height-sm"></div>
			            </div>
			        </div>
			    </div>
			    <!-- end col-8 -->
                        </div>
                    <!-- end col-8  -->
                       <div class="col-md-4">
			        <div class="panel-group" id="accordion">
						<div class="panel panel-inverse overflow-hidden">
							<div class="panel-heading">
                                                            <h3 class="panel-title">
									<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
									    <i class="fa fa-plus-circle pull-right"></i> 
                                                                            Basic Profile
									</a>
								</h3>   
							</div>
							<div id="collapseOne" class="panel-collapse collapse in">
								<div class="panel-body">
                                                                      <div class="row f-s-12">
                                                                        <label class="col-lg-6 control-label"><strong>First name:</strong></label>
                                                                        <label class="col-lg-6 control-label"><?php echo $row->sfirstname?> </label>
                                                                      </div>
                                                                       <div class="row f-s-12">
                                                                        <label class="col-lg-6 control-label"><strong>Middle name:</strong></label>
                                                                        <label class="col-lg-6 control-label"><?php echo $row->smiddlename?> </label>
                                                                      </div>
                                                                      <div class="row f-s-12">
                                                                       <label class="col-lg-6 control-label"><strong>Last name:</strong></label>
                                                                       <label class="col-lg-6 control-label"><?php echo $row->slastname?> </label>
                                                                      </div>
                                                                      <div class="row f-s-12">
                                                                        <label class="col-lg-6 control-label"><strong>Date Of Birth:</strong></label>
                                                                        <label class="col-lg-6 control-label"><?php echo $row->sdob?> </label>
                                                                       </div>
                                                                       <div class="row f-s-12">
                                                                        <label class="col-lg-6 control-label"><strong>Gender:</strong></label>
                                                                        <label class="col-lg-6 control-label"><?php echo $row->sgender?> </label>
                                                                       </div>
                                                                        <div class="row f-s-12">
                                                                        <label class="col-lg-6 control-label"><strong>Home Language:</strong></label>
                                                                        <label class="col-lg-6 control-label"><?php echo $row->slanguage?> </label>
                                                                       </div>
								</div>
							</div>
						</div>
						<div class="panel panel-inverse overflow-hidden">
							<div class="panel-heading">
								<h3 class="panel-title">
									<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
									    <i class="fa fa-plus-circle pull-right"></i> 
										Parent Details
									</a>
								</h3>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body">
                                                                    <strong>Father:</strong> <?php echo $row->ftitle?> <?php echo $row->ffirstname?> <?php echo $row->fmiddlename?> <?php echo $row->flastname?> <br>
                                                                    Contact: <i class="fa fa-mobile-phone"></i> : <?php echo $row->fcell?> <i class="fa fa-phone-square"></i> : <?php echo $row->fworktel?> <i class="fa fa-envelope-square"></i>:<?php echo $row->femail?> 
                                                                    <legend></legend> 
                                                                    <strong>Mother:</strong> <?php echo $row->mtitle?> <?php echo $row->mfirstname?> <?php echo $row->mmiddlename?> <?php echo $row->mlastname?> <br>
                                                                    Contact: <i class="fa fa-mobile-phone"></i> : <?php echo $row->mcell?> <i class="fa fa-phone-square"></i> : <?php echo $row->mworktel?> <i class="fa fa-envelope-square"></i>:<?php echo $row->memail?> 
                                                                    <legend></legend>
                                                                    <strong>Guardian:</strong> <?php echo $row->gtitle?> <?php echo $row->gfirstname?> <?php echo $row->gmiddlename?> <?php echo $row->glastname?> <br>
                                                                    Contact: <i class="fa fa-mobile-phone"></i> : <?php echo $row->gcell?> <i class="fa fa-phone-square"></i> : <?php echo $row->gworktel?> <i class="fa fa-envelope-square"></i>:<?php echo $row->gemail?> 
                                                                    <legend></legend>
								</div>
							</div>
						</div>
						<div class="panel panel-inverse overflow-hidden">
							<div class="panel-heading">
								<h3 class="panel-title">
									<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
									    <i class="fa fa-plus-circle pull-right"></i> 
										Geographic Information
									</a>
								</h3>
							</div>
							<div id="collapseThree" class="panel-collapse collapse">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
								</div>
							</div>
						</div>
					</div>
			    </div>
			    <!-- end col-6 -->
                    </div>
                        <?php  endforeach;?>
                        <?php else : ?><h6>No records </h6> 
                        <?php endif; ?>
		<!-- end #content -->
		<!-- begin #footer -->
		<div id="footer" class="footer">
                    <a class="shoshial btn btn-default btn-icon btn-circle"><i class="fa fa-twitter"></i></a>&nbsp;
                   <a class="shoshial btn btn-default btn-icon btn-circle"><i class="fa fa-facebook-f"></i></a>&nbsp;
                   <a class="shoshial btn btn-default btn-icon btn-circle"><i class="fa fa-google-plus"></i></a>&nbsp;
                   <a class="shoshial btn btn-default btn-icon btn-circle"><i class="fa fa-linkedin"></i></a>&nbsp;
                    <a class="shoshial btn btn-default btn-icon btn-circle"><i class="fa fa-youtube-play"></i></a>&nbsp;
                    <a class="shoshial btn btn-default btn-icon btn-circle"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="shoshialt f-s-13 f-w-600 " ><strong>sqoolz blog</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="shoshialt f-s-13 f-w-600 " ><strong>about sqoolz</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="shoshialt f-s-13 f-w-600 " ><strong>privacy policy</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="shoshialt f-s-13 f-w-600 " ><strong>terms & conditions</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <p class="shoshialt f-s-13 f-w-600  pull-right">&copy; 2016 sqoolz island, inc.</p>
		</div>
		<!-- end #footer -->
  
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url();?>/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo base_url();?>/assets/crossbrowserjs/html5shiv.js"></script>
		<script src="<?php echo base_url();?>/assets/crossbrowserjs/respond.min.js"></script>
		<script src="<?php echo base_url();?>/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url();?>/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/chart-js/chart.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url();?>/assets/js/apps.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.2/d3.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/DataTables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url();?>/assets/js/table-grades.js"></script>
        <script src="<?php echo base_url();?>/assets/plugins/nvd3/build/nv.d3.js"></script>
	<script src="<?php echo base_url();?>/assets/js/chart-d3.demo.js"></script>
        <script src="<?php echo base_url();?>/assets/js/chart-js.demo.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script>
        $('.count').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
        </script>
	<script>
		$(document).ready(function() {
			App.init();
                        ChartNvd3.init();
                        ChartJs.init();
                        TableManageScroller.init();
		});
	</script>
  <script>
  function drawLineChart() {

    // Add a helper to format timestamp data

    var jsonData = $.ajax({
      url : "<?=base_url("assets/line.json")?>",
      dataType: 'json'  
    }).done(function (results) {
      // Create the chart.js data structure using 'labels' and 'data'
      var tempData = {
        labels: ['English', 'Mathematics', 'History', 'Afrikaans', 'Geography', 'Accounting', 'Business Studies','Physical Science','Agriculture'],
        datasets: [
                    {
                        label: 'My First dataset',
                        fillColor: 'rgba(0, 17, 17,0.4)',
                        strokeColor: 'rgba(0, 17, 17,1)',
                        pointColor: 'rgba(0, 17, 17,1)',
                        pointStrokeColor: '#fff',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(45,53,60,1)',
                        data: [65,59,90,81,56,55,70,85,99]
                    },
                    {
                        label: 'My Second dataset',
                        fillColor: 'rgba(0, 154, 154,0.2)',
                        strokeColor: '#fff',
                        pointColor: 'rgba(0, 154, 154,1)',
                        pointStrokeColor: '#fff',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(10, 154, 154,1)',
                        data: [88,48,60,49,96,87,100,55,72]
                    }
                 ]
          };
          
      var polarData = [
                        {
                            value: 40, color: 'rgba(0, 17, 17,0.4)', highlight: '#fff',label: 'English'
                        },
                        {
                            value: 60, color: strokeBlue, highlight: '#fff', label: 'Mathematics'
                        },
                        {
                            value: 45, color: strokeGreen, highlight: '#fff', label: 'History'
                        },
                        {
                            value: 62, color: strokeGrey, highlight: '#fff',label: 'Afrikaans'
                        },
                        {
                            value: 70, color: strokeGrey, highlight: '#fff',label: 'Geography'
                        },
                        {
                            value: 45, color: strokeGrey, highlight: '#fff',label: 'Accounting'
                        },
                        {
                            value: 34, color: strokeGrey, highlight: '#fff',label: 'Business Studies'
                        },
                        {
                            value: 94, color: strokeBlack, highlight: '#fff', label: 'Agriculture'
                        },
                        {
                            value: 56, color: strokeBlack, highlight: '#fff', label: 'hysical Science'
                        }
                      ];

      // Get the context of the canvas element we want to select
      var ctx = document.getElementById("myLineChart").getContext("2d");

      // Instantiate a new chart
      var myLineChart = new Chart(ctx).Radar(tempData, {
        //bezierCurve: false
      });
      
        
      // Get the context of the canvas element we want to select
      var ctx2 = document.getElementById("myChart").getContext("2d");

      // Instantiate a new chart
      var myChart = new Chart(ctx2).PolarArea(polarData, {
        //bezierCurve: false
      });
   
    });
  }
  
  drawLineChart();
  
  function polar(){
    var polarData = [
                        {
                            value: 40, color: 'rgba(0, 17, 17,0.4)', highlight: '#fff',label: 'English'
                        },
                        {
                            value: 60, color: strokeBlue, highlight: '#fff', label: 'Mathematics'
                        },
                        {
                            value: 45, color: strokeGreen, highlight: '#fff', label: 'History'
                        },
                        {
                            value: 62, color: strokeGrey, highlight: '#fff',label: 'Afrikaans'
                        },
                        {
                            value: 70, color: strokeGrey, highlight: '#fff',label: 'Geography'
                        },
                        {
                            value: 45, color: strokeGrey, highlight: '#fff',label: 'Accounting'
                        },
                        {
                            value: 34, color: strokeGrey, highlight: '#fff',label: 'Business Studies'
                        },
                        {
                            value: 94, color: strokeBlack, highlight: '#fff', label: 'Agriculture'
                        },
                        {
                            value: 56, color: strokeBlack, highlight: '#fff', label: 'hysical Science'
                        }
                      ];
                      
                      var pieChartContent = document.getElementById('pieChartContent');

                        console.log(pieChartContent);
                        pieChartContent.innerHTML = '&nbsp;';
                        $('#pieChartContent').append('<canvas id="myChart" ><canvas>');

                      // Get the context of the canvas element we want to select
                      var ctx2 = document.getElementById("myChart").getContext("2d");

                      // Instantiate a new chart
                      var myChart = new Chart(ctx2).PolarArea(polarData, {
                        //bezierCurve: false
                      });
  }
  function po() {
    polar();
  }
  
  
</script>
<script>
function donut() {
        var jsonData = $.ajax({
          url : "<?=base_url("assets/line.json")?>",
          dataType: 'json'  
        }).done(function (results) {
          // Create the chart.js data structure using 'labels' and 'data'
           var donutData = [
                        {
                            value: 40, color: 'rgba(0, 17, 17,0.4)', highlight: '#fff',label: 'English'
                        },
                        {
                            value: 60, color: strokeBlue, highlight: '#fff', label: 'Mathematics'
                        },
                        {
                            value: 45, color: strokeGreen, highlight: '#fff', label: 'History'
                        },
                        {
                            value: 62, color: strokeGrey, highlight: '#fff',label: 'Afrikaans'
                        },
                        {
                            value: 70, color: strokeGrey, highlight: '#fff',label: 'Geography'
                        },
                        {
                            value: 45, color: strokeGrey, highlight: '#fff',label: 'Accounting'
                        },
                        {
                            value: 34, color: strokeGrey, highlight: '#fff',label: 'Business Studies'
                        },
                        {
                            value: 94, color: strokeBlack, highlight: '#fff', label: 'Agriculture'
                        },
                        {
                            value: 56, color: strokeBlack, highlight: '#fff', label: 'hysical Science'
                        }
                      ];


          var pieChartContent = document.getElementById('pieChartContent');

          console.log(pieChartContent);
          pieChartContent.innerHTML = '&nbsp;';
          $('#pieChartContent').append('<canvas id="myChart" ><canvas>');

          var ctx2 = document.getElementById("myChart").getContext("2d");
          // Instantiate a new chart
          var myLineChart = new Chart(ctx2).Doughnut(donutData, {
            //bezierCurve: false
          });


        });
}

function doughnut() {
donut();
}
</script>

<script>
function pie() {
    var jsonData = $.ajax({
      url : "<?=base_url("assets/line.json")?>",
      dataType: 'json'  
    }).done(function (results) {
      // Create the chart.js data structure using 'labels' and 'data'
      var pieData = [
                        {
                            value: 40, color: 'rgba(0, 17, 17,0.4)', highlight: '#fff',label: 'English'
                        },
                        {
                            value: 60, color: strokeBlue, highlight: '#fff', label: 'Mathematics'
                        },
                        {
                            value: 45, color: strokeGreen, highlight: '#fff', label: 'History'
                        },
                        {
                            value: 62, color: strokeGrey, highlight: '#fff',label: 'Afrikaans'
                        },
                        {
                            value: 70, color: strokeGrey, highlight: '#fff',label: 'Geography'
                        },
                        {
                            value: 45, color: strokeGrey, highlight: '#fff',label: 'Accounting'
                        },
                        {
                            value: 34, color: strokeGrey, highlight: '#fff',label: 'Business Studies'
                        },
                        {
                            value: 94, color: strokeBlack, highlight: '#fff', label: 'Agriculture'
                        },
                        {
                            value: 56, color: strokeBlack, highlight: '#fff', label: 'hysical Science'
                        }
                      ];
                      
        var pieChartContent = document.getElementById('pieChartContent');

        pieChartContent.innerHTML = '&nbsp;';
        $('#pieChartContent').append('<canvas id="myChart" ><canvas>');
          
       // Get the context of the canvas element we want to select
      var ctx2 = document.getElementById("myChart").getContext("2d");

      // Instantiate a new chart
      var myChart = new Chart(ctx2).Pie(pieData, {
        //bezierCurve: false
      });
      
    });
}

function m() {
pie();
}
</script>
</body>
</html>
