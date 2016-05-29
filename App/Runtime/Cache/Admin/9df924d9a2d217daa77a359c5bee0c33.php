<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html >
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>lushuozhi</title>

    <link href="/boon/Public/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/boon/Public/Admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="/boon/Public/Admin/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/boon/Public/Admin/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/boon/Public/Admin/css/animate.css" rel="stylesheet">
    <link href="/boon/Public/Admin/css/style.css" rel="stylesheet">
    
    
    <script src="/boon/Public/Admin/js/jquery-2.1.1.js"></script>
    <script src="/boon/Public/Admin/js/bootstrap.min.js"></script>
    <script src="/boon/Public/Admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/boon/Public/Admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
</head>

<body>
    <div id="wrapper">
     <!-- 右侧导航 -->
       	<nav class="navbar-default navbar-static-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav metismenu" id="side-menu">
					<li class="nav-header">
						<div class="dropdown profile-element">
							<span> 
								<img alt="image" class="img-circle" src="/boon/Public/Admin/img/profile_small.jpg" />
							</span>
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<span class="clear"> 
									<span class="block m-t-xs"> <strong class="font-bold">lushuozhi</strong> </span> 
									<span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
								</span>
							</a>
							<ul class="dropdown-menu animated fadeInRight m-t-xs">
								<li><a href="profile.html">Profile</a></li>
								<li><a href="contacts.html">Contacts</a></li>
								<li><a href="mailbox.html">Mailbox</a></li>
								<li class="divider"></li>
								<li><a href="login.html">Logout</a></li>
							</ul>
						</div>
						<div class="logo-element">lu+</div>
					</li>
					<li class="active">
						<a href="index.html">
							<i class="fa fa-th-large"></i> 
							<span class="nav-label">Dashboards</span>
							<span class="fa arrow"></span>
						</a>
						<ul class="nav nav-second-level">
							<li class="active"><a href="index.html">Dashboard v.1</a></li>
							<li><a href="dashboard_2.html">Dashboard v.2</a></li>
							<li><a href="dashboard_3.html">Dashboard v.3</a></li>
							<li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
							<li><a href="dashboard_5.html">Dashboard v.5 <span class="label label-primary pull-right">NEW</span></a></li>
						</ul>
					</li>
					
					<li>
						<a href="#"><i class="fa fa-user"></i> <span class="nav-label">用户中心</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level collapse">
							<li><a href="<?php echo U('Admin/User/Index');?>">用户组</a></li>
							<li><a href="graph_morris.html">Morris.js Charts</a></li>
							<li><a href="graph_rickshaw.html">Rickshaw Charts</a></li>
							<li><a href="graph_chartjs.html">Chart.js</a></li>
							<li><a href="graph_chartist.html">Chartist</a></li>
							<li><a href="graph_peity.html">Peity Charts</a></li>
							<li><a href="graph_sparkline.html">Sparkline Charts</a></li>
						</ul>
					</li>
					
					<li>
						<a href="layouts.html">
							<i class="fa fa-diamond"></i>
						 	<span class="nav-label">Layouts</span>
						 </a>
					 </li>
					 
					 
					 
					<li>
						<a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span><span class="fa arrow"></span></a>
						<ul class="nav nav-second-level collapse">
							<li><a href="graph_flot.html">Flot Charts</a></li>
							<li><a href="graph_morris.html">Morris.js Charts</a></li>
							<li><a href="graph_rickshaw.html">Rickshaw Charts</a></li>
							<li><a href="graph_chartjs.html">Chart.js</a></li>
							<li><a href="graph_chartist.html">Chartist</a></li>
							<li><a href="graph_peity.html">Peity Charts</a></li>
							<li><a href="graph_sparkline.html">Sparkline Charts</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
<!-- 右侧导航 结束 -->
	<div id="page-wrapper" class="gray-bg dashbard-1">
		<div class="row border-bottom">
			<nav class="navbar navbar-static-top" role="navigation"	style="margin-bottom: 0">
				<div class="navbar-header">
					<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
					<form role="search" class="navbar-form-custom" action="search_results.html">
						<div class="form-group">
							<input type="text" placeholder="输入搜索" class="form-control" name="top-search" id="top-search">
						</div>
					</form>
				</div>
				<ul class="nav navbar-top-links navbar-right">
					<li><span class="m-r-sm text-muted welcome-message">欢迎你</span></li>
					<li class="dropdown">
						<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#"> 
							<i class="fa fa-envelope"></i>
							<span class="label label-warning">16</span>
						</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box">
									<a href="profile.html" class="pull-left"> <img alt="image" class="img-circle" src="img/a7.jpg"></a>
									<div class="media-body">
										<small class="pull-right">46h ago</small> <strong>MikeLoreipsum</strong> started following <strong>Monica Smith</strong>. <br>
										<small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
									</div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box">
									<a href="profile.html" class="pull-left"> 
										<img alt="image" class="img-circle" src="img/a4.jpg">
									</a>
									<div class="media-body ">
										<small class="pull-right text-navy">5h ago</small>
										<strong>Chris Johnatan Overtunk</strong> started following 
										<strong>Monica Smith</strong>. <br> 
										<small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
									</div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box">
									<a href="profile.html" class="pull-left"> 
										<img alt="image" class="img-circle" src="img/profile.jpg">
									</a>
									<div class="media-body ">
										<small class="pull-right">23h ago</small> 
										<strong>Monica Smith</strong> love 
										<strong>Kim Smith</strong>. <br> 
										<small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
									</div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="text-center link-block">
									<a href="mailbox.html"> <i class="fa fa-envelope"></i> 
										<strong>Read All Messages</strong>
									</a>
								</div>
							</li>
						</ul></li>
					<li class="dropdown">
						<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#"> 
							<i class="fa fa-bell"></i> 
							<span class="label label-primary">8</span>
						</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li>
								<a href="mailbox.html">
									<div>
										<i class="fa fa-envelope fa-fw"></i> You have 16 messages 
										<span class="pull-right text-muted small">4 minutes ago</span>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="profile.html">
									<div>
										<i class="fa fa-twitter fa-fw"></i> 3 New Followers 
										<span class="pull-right text-muted small">12 minutes ago</span>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="grid_options.html">
									<div>
										<i class="fa fa-upload fa-fw"></i> Server Rebooted
										 <span class="pull-right text-muted small">4 minutes ago</span>
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<div class="text-center link-block">
									<a href="notifications.html">
										 <strong>See All Alerts</strong> 
										 <i class="fa fa-angle-right"></i>
									</a>
								</div>
							</li>
						</ul></li>

					<li>
						<a href="login.html"> 
							<i class="fa fa-sign-out"></i>Log out
						</a>
					</li>
					<li>
						<a class="right-sidebar-toggle">
							<i class="fa fa-tasks"></i>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		
		<div class="row  border-bottom white-bg dashboard-header">
			<div class="col-sm-3">
				<h2>Welcome Amelia</h2>
				<small>You have 42 messages and 6 notifications.</small>
				<ul class="list-group clear-list m-t">
					<li class="list-group-item fist-item">
						<span class="pull-right"> 09:00 pm </span>
						<span class="label label-success">1</span> Please contact me
					</li>
					<li class="list-group-item">
						<span class="pull-right"> 10:16 am </span> 
						<span class="label label-info">2</span> Sign a contract
					</li>
					<li class="list-group-item">
						<span class="pull-right"> 08:22 pm </span>
						<span class="label label-primary">3</span> Open new shop
					</li>
					<li class="list-group-item">
						<span class="pull-right"> 11:06 pm </span> 
						<span class="label label-default">4</span> Call back to Sylvia
					</li>
					<li class="list-group-item">
						<span class="pull-right"> 12:00 am </span> 
						<span class="label label-primary">5</span> Write a letter to Sandra
					</li>
				</ul>
			</div>
			<div class="col-sm-6">
				<div class="flot-chart dashboard-chart">
					<div class="flot-chart-content" id="flot-dashboard-chart"></div>
				</div>
				<div class="row text-left">
					<div class="col-xs-4">
						<div class=" m-l-md">
							<span class="h4 font-bold m-t block">$ 406,100</span>
							<small class="text-muted m-b block">Sales marketing report</small>
						</div>
					</div>
					<div class="col-xs-4">
						<span class="h4 font-bold m-t block">$ 150,401</span>
						 <small class="text-muted m-b block">Annual sales revenue</small>
					</div>
					<div class="col-xs-4">
						<span class="h4 font-bold m-t block">$ 16,822</span> 
						<small class="text-muted m-b block">Half-year revenue margin</small>
					</div>

				</div>
			</div>
			<div class="col-sm-3">
				<div class="statistic-box">
					<h4>Project Beta progress</h4>
					<p>You have two project with not compleated task.</p>
					<div class="row text-center">
						<div class="col-lg-6">
							<canvas id="polarChart" width="80" height="80"></canvas>
							<h5>Kolter</h5>
						</div>
						<div class="col-lg-6">
							<canvas id="doughnutChart" width="78" height="78"></canvas>
							<h5>Maxtor</h5>
						</div>
					</div>
					<div class="m-t">
						<small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
<script>
       $(document).ready(function() {
     
           var data1 = [
               [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
           ];
           var data2 = [
               [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
           ];
           $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
               data1, data2
           ],
                   {
                       series: {
                           lines: {
                               show: false,
                               fill: true
                           },
                           splines: {
                               show: true,
                               tension: 0.4,
                               lineWidth: 1,
                               fill: 0.4
                           },
                           points: {
                               radius: 0,
                               show: true
                           },
                           shadowSize: 2
                       },
                       grid: {
                           hoverable: true,
                           clickable: true,
                           tickColor: "#d5d5d5",
                           borderWidth: 1,
                           color: '#d5d5d5'
                       },
                       colors: ["#1ab394", "#1C84C6"],
                       xaxis:{
                       },
                       yaxis: {
                           ticks: 4
                       },
                       tooltip: false
                   }
           );

           var doughnutData = [
               {
                   value: 300,
                   color: "#a3e1d4",
                   highlight: "#1ab394",
                   label: "App"
               },
               {
                   value: 50,
                   color: "#dedede",
                   highlight: "#1ab394",
                   label: "Software"
               },
               {
                   value: 100,
                   color: "#A4CEE8",
                   highlight: "#1ab394",
                   label: "Laptop"
               }
           ];

           var doughnutOptions = {
               segmentShowStroke: true,
               segmentStrokeColor: "#fff",
               segmentStrokeWidth: 2,
               percentageInnerCutout: 45, // This is 0 for Pie charts
               animationSteps: 100,
               animationEasing: "easeOutBounce",
               animateRotate: true,
               animateScale: false
           };

           var ctx = document.getElementById("doughnutChart").getContext("2d");
           var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);


       });
   </script>
	</div>
	<script src="/boon/Public/Admin/js/plugins/flot/jquery.flot.js"></script>
	<script src="/boon/Public/Admin/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
	<script src="/boon/Public/Admin/js/plugins/flot/jquery.flot.spline.js"></script>
	<script src="/boon/Public/Admin/js/plugins/flot/jquery.flot.resize.js"></script>
	<script src="/boon/Public/Admin/js/plugins/flot/jquery.flot.pie.js"></script>

	<!-- Peity -->
	<script src="/boon/Public/Admin/js/plugins/peity/jquery.peity.min.js"></script>
	<script src="/boon/Public/Admin/js/demo/peity-demo.js"></script>

	<!-- Custom and plugin javascript -->
	<script src="/boon/Public/Admin/js/inspinia.js"></script>
	<script src="/boon/Public/Admin/js/plugins/pace/pace.min.js"></script>

	<!-- jQuery UI -->
	<script src="/boon/Public/Admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>

	<!-- GITTER -->
	<script src="/boon/Public/Admin/js/plugins/gritter/jquery.gritter.min.js"></script>

	<!-- Sparkline -->
	<script src="/boon/Public/Admin/js/plugins/sparkline/jquery.sparkline.min.js"></script>

	<!-- Sparkline demo data  -->
	<script src="/boon/Public/Admin/js/demo/sparkline-demo.js"></script>

	<!-- ChartJS-->
	<script src="/boon/Public/Admin/js/plugins/chartJs/Chart.min.js"></script>

	<!-- Toastr -->
	<script src="/boon/Public/Admin/js/plugins/toastr/toastr.min.js"></script>
</body>
</html>