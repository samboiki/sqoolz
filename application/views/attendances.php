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
                            <?php $idd = $row->id;?>
			                <div class="widget-blog-cover" >
                                            <ol class="breadcrumb pull-left text-white f-w-600 f-s-13 m-l-100">
                                                <li><?php echo $row->firstname?> <?php echo $row->lastname?>, 8a, <?php echo $row->gender?>,<?php $d = $row->dob; $date = date('Y-m-d'); $dd = $date - $d; echo $dd; ?> years old</li>
                                             </ol>    
                                        </div>
                            <?php  endforeach;?>
                            <?php else : ?><h6>No records </h6>
                            <?php endif; ?>
			                <div class="widget-blog-author" >
			                    <div class="widget-blog-author-image">
			                        <img src="../assets/img/user-10.jpg" alt="">
			                    </div>
			                    <div class="widget-blog-author-info text-inverse" style="margin-top: -1px; margin-left: 7px;">
                                                <a href="<?php echo base_url()?>user/<?php echo $idd;?>" data-toggle="tooltip" data-placement="bottom" title="Home" class="shoshials btn btn-circle btn-icon m-t-3 "><i class="fa fa-home"></i></a>
                                                <a href="<?php echo base_url()?>assessments/<?php echo $idd;?>" data-toggle="tooltip" data-placement="bottom" title="Assessments" class="shoshials btn btn-circle btn-icon  m-l-25 m-t-3" ><i class="fa fa-graduation-cap"></i></a>
                                                <a href="<?php echo base_url()?>attendances/<?php echo $idd;?>" data-toggle="tooltip" data-placement="bottom" title="Attendance" class="shoshialsa btn btn-circle btn-icon   fa-spin m-t-3 m-l-25" ><i class="fa fa-clock-o"></i></a>
                                                <a href="<?php echo base_url()?>disciplines/<?php echo $idd;?>" data-toggle="tooltip" data-placement="bottom" title="Discipline" class="shoshials btn btn-circle btn-icon m-t-3 m-l-25"><i class="fa fa-legal"></i></a>
                                              </div>
			                </div>
			            </div>
                            
                        </div>
                        </div>
                        <legend></legend>
                        <!-- begin row -->
			<div class="row">
				<!-- end col-3 -->
                                <!-- begin col-10 -->
                                    <div class="col-md-10">
                                        <!-- begin panel -->
                                        <div class="panel panel-inverse">
                                            <div class="panel-heading">
                                                <div class="panel-heading-btn">
                                                    <a href="#modal-alert" data-toggle="modal" class="btn btn-labeled btn-success btn-xs">
                                                     <i class="fa fa-plus"></i>
                                                       Add an assessment 
                                                    </a>
                                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                                                </div>
                                                <h4 class="panel-title  "><strong>Assessments</strong></h4>
                                            </div>
                                            <div class="panel-body">

                                                <table id="data-table" class="table table-condensed table-striped table-bordered display" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Subject</th>
                                                            <th>Class</th>
                                                            <th>Mark out of</th>
                                                            <th>Mark</th>
                                                            <th>Percent</th>
                                                            <th>Weight</th>
                                                            <th>oWeight</th>
                                                            <th>Ass</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Subject</th>
                                                            <th>Class</th>
                                                            <th>Mark out of</th>
                                                            <th>Mark</th>
                                                            <th>Average</th>
                                                            <th>Weight</th>
                                                            <th>oWeight</th>
                                                            <th>Ass</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>

                                            </div>
                                        </div>
                                        <!-- end panel -->
                                    </div>
                                <!-- end col-10 -->
                                
				    <!-- begin col-3 -->
				<div class="col-md-2">
                                   <div class="widget widget-stats text-inverse " style="background: rgba(122, 130, 136, 0.2)!important;">
						<div class="stats-icon"><i class="fa fa-apple"></i></div>
						<div class="stats-info">
                                                    <strong>Welcome Admin </strong><br>You have an overdue payment, so you don't currently have full access to our learning material. If you're ready to start learning again, click here to update your payment method.
                                                </div>
					</div>
				</div>
			</div>
                        <div class="modal fade" id="modal-alert">
                            <div class="modal-dialog">
                                    <div class="modal-content">
                                            <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h5 class="modal-tietle"><strong>Add an assessment</strong></h5>
                                            </div>
                                            <div class="modal-body">
                                                    <form action="<?php echo base_url()?>addc" method="post" name="form_name" id="form_id" class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form" novalidate="">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="stats-info"><strong>Class type</strong> </div>
                                                            <select class="form-control" id="select-required" name="ctype" data-parsley-required="true" data-parsley-id="8187">
                                                                <option value="">Please choose</option>
                                                                <?php if(isset($class)) : foreach($class as $row) :  ?>
                                                                <option value="<?php echo $row->id?>"><?=$row->name?></option>

                                                                <?php  endforeach;?>
                                                                <?php else : ?><h6>No records </h6>
                                                                <?php endif; ?>
                                                            </select><ul class="parsley-errors-list" id="parsley-id-8187"></ul>
                                                    </div>
                                                        <legend></legend>
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4">
                                                                <div class="stats-info"><strong>Kanyangela Samuelinho</strong> </div>
                                                                <input class="form-control input-xs" type="text" placeholder=".input-sm">
                                                            </div>
                                                            <div class="col-md-3 col-sm-3">
                                                                <div class="stats-info"><strong>Grade Subset</strong> </div>
                                                                    <select class="form-control" id="select-required" name="subset" data-parsley-required="true" data-parsley-id="8187">
                                                                            <option value="">Please choose</option>
                                                                            <option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option><option value="F">F</option>
                                                                            <option value="G">G</option><option value="H">H</option>
                                                                    </select><ul class="parsley-errors-list" id="parsley-id-8187"></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <legend></legend>
                                                        <div class="col-md-12 col-sm-12">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="stats-info"><strong>Subject</strong> </div> <input class="form-control input-xs" type="text" placeholder=".input-sm">
                                                                 
                                                            </div>
                                                        </div>
                                                         <div class="row">
                                                            <div class="col-md-6 col-sm-6">
                                                                <div class="stats-info"><strong>Teacher</strong> </div> <input class="form-control input-xs" type="text" placeholder=".input-sm">
                                                            </div>
                                                        </div>
                                                    </div> 

                                                        <br><br><br><br><br>
                                                    <div class="modal-footer" style="border: none;">
                                                        <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Cancel</a>
                                                        <button type="submit"  class="btn btn-success btn-sm">Submit</button>
                                                    </div>
                                                </form>
                                            </div>  
                                    </div>
                            </div>
                    </div>
			<!-- end row -->
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
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url();?>/assets/js/apps.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.2/d3.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/DataTables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
	<script src="<?php echo base_url();?>/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	
        <script src="<?php echo base_url();?>/assets/js/table-smarks.js"></script>
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
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
        });
        </script>
	<script>
		$(document).ready(function() {
			App.init();
                        TableManageScroller.init();
		});
	</script>

</body>
</html>
