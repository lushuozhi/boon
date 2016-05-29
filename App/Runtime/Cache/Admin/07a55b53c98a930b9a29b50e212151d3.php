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
							<i class="fa fa-sign-out"></i>退出
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
			sdasdsa
		</div>
	</div>
	
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