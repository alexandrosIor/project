<!DOCTYPE html>
<html>
	
	<head>
		
		<!-- Title -->
		<title>Modern | Admin Dashboard Template</title>
		
		<meta content="width=device-width, initial-scale=1" name="viewport"/>
		<meta charset="UTF-8">
		<meta name="description" content="Catering manager" />
		<meta name="keywords" content="admin,dashboard" />
		
		<!-- Styles -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href="/assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
		<link href="/assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
		<link href="/assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
		<link href="/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
		<link href="/assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
		<link href="/assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
		<link href="/assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
		<link href="/assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>	
		<link href="/assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>	
		<link href="/assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet" type="text/css"/>	
		<link href="/assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>	
			
		<!-- Theme Styles -->
		<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="/assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
		<link href="/assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
		<link href="/assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
		<link href="/assets/css/custom.css" rel="stylesheet" type="text/css"/>
		
		<script src="/assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
		<script src="/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>

		<?=$this->layout_lib->print_additional_css()?>
		
	</head>
	<body class="page-header-fixed">
		<main class="page-content content-wrap">
			<div class="navbar">
				<div class="navbar-inner">
					<div class="sidebar-pusher">
						<a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="logo-box">
						<a href="/main" class="logo-text"><span>Catering</span></a>
					</div>
					<div class="topmenu-outer">
						<div class="top-menu">
							<ul class="nav navbar-nav navbar-left">
								<li>		
									<a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
								</li>
								<li>
									<a href="#cd-nav" class="waves-effect waves-button waves-classic cd-nav-trigger"><i class="fa fa-diamond"></i></a>
								</li>
								<li>		
									<a href="javascript:void(0);" class="waves-effect waves-button waves-classic toggle-fullscreen"><i class="fa fa-expand"></i></a>
								</li>
							</ul>
							<ul class="nav navbar-nav navbar-right">								
								<li>
									<a href="/logout" class="log-out waves-effect waves-button waves-classic">
										<span><i class="fa fa-sign-out m-r-xs fa-lg"></i>Αποσύνδεση</span>
									</a>
								</li>
							</ul><!-- Nav -->
						</div><!-- Top Menu -->
					</div>
				</div>
			</div><!-- Navbar -->


			<div class="page-sidebar sidebar">
				<div class="page-sidebar-inner slimscroll">
					<div class="sidebar-header">
						<div class="sidebar-profile">
							<div class="sidebar-profile-image">
								<img src="/assets/images/profile-menu-image.png" class="img-circle img-responsive" alt="">
							</div>
							<span><?=$logged_in_member->email?><br><small><?=$logged_in_member->role?></small></span>
						</div>
					</div>
					<ul class="menu accordion-menu">
<?php foreach ($menu as $menu_item) {?>
						<li class="<?=(isset($menu_item['submenu'])) ? 'droplink' : '' ?>">
							<a href="<?=$menu_item['link']?>" class="waves-effect waves-button">
								<span class="menu-icon glyphicon <?=$menu_item['icon']?>"></span>
								<p><?=$menu_item['name']?></p>
								<?=(isset($menu_item['submenu'])) ? '<span class="arrow"></span>' : ''?>
							</a>
	<?php if(isset($menu_item['submenu'])) {?> 
							<ul class="sub-menu">
		<?php foreach($menu_item['submenu'] as $submenu_menu_item){?>
								<li><a href="<?=$submenu_menu_item['link']?>"><?=$submenu_menu_item['name']?></a></li>
		<?php }?>					
							</ul>
	<?php }?>
						</li>
<?php }?>
					</ul>
				</div><!-- Page Sidebar Inner -->
			</div><!-- Page Sidebar -->

			<?=$body?>

		</main><!-- Page Content -->
		<!--left slide page diamond-->
		<nav class="cd-nav-container" id="cd-nav">
			<header>
				<h3>Navigation</h3>
				<a href="#0" class="cd-close-nav">Close</a>
			</header>
			<ul class="cd-nav list-unstyled">
				<li class="cd-selected" data-menu="index">
					<a href="javsacript:void(0);">
						<span>
							<i class="glyphicon glyphicon-home"></i>
						</span>
						<p>Dashboard</p>
					</a>
				</li>
				<li data-menu="profile">
					<a href="javsacript:void(0);">
						<span>
							<i class="glyphicon glyphicon-user"></i>
						</span>
						<p>Profile</p>
					</a>
				</li>
				<li data-menu="inbox">
					<a href="javsacript:void(0);">
						<span>
							<i class="glyphicon glyphicon-envelope"></i>
						</span>
						<p>Mailbox</p>
					</a>
				</li>
				<li data-menu="#">
					<a href="javsacript:void(0);">
						<span>
							<i class="glyphicon glyphicon-tasks"></i>
						</span>
						<p>Tasks</p>
					</a>
				</li>
				<li data-menu="#">
					<a href="javsacript:void(0);">
						<span>
							<i class="glyphicon glyphicon-cog"></i>
						</span>
						<p>Settings</p>
					</a>
				</li>
				<li data-menu="calendar">
					<a href="javsacript:void(0);">
						<span>
							<i class="glyphicon glyphicon-calendar"></i>
						</span>
						<p>Calendar</p>
					</a>
				</li>
			</ul>
		</nav>
		<div class="cd-overlay"></div>
	
		<!-- Javascripts -->
		<script src="/assets/plugins/jquery/jquery-2.1.4.min.js"></script>
		<script src="/assets/plugins/pace-master/pace.min.js"></script>
		<script src="/assets/plugins/jquery-blockui/jquery.blockui.js"></script>
		<script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<script src="/assets/plugins/switchery/switchery.min.js"></script>
		<script src="/assets/plugins/uniform/jquery.uniform.min.js"></script>
		<script src="/assets/plugins/offcanvasmenueffects/js/classie.js"></script>
		<script src="/assets/plugins/offcanvasmenueffects/js/main.js"></script>
		<script src="/assets/plugins/waves/waves.min.js"></script>
		<script src="/assets/plugins/3d-bold-navigation/js/main.js"></script>
		<script src="/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
		<script src="/assets/plugins/jquery-counterup/jquery.counterup.min.js"></script>
		<script src="/assets/plugins/toastr/toastr.min.js"></script>
		<script src="/assets/plugins/flot/jquery.flot.min.js"></script>
		<script src="/assets/plugins/flot/jquery.flot.time.min.js"></script>
		<script src="/assets/plugins/flot/jquery.flot.symbol.min.js"></script>
		<script src="/assets/plugins/flot/jquery.flot.resize.min.js"></script>
		<script src="/assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
		<script src="/assets/plugins/curvedlines/curvedLines.js"></script>
		<script src="/assets/plugins/metrojs/MetroJs.min.js"></script>
		<script src="/assets/js/modern.min.js"></script>
		<script src="/assets/js/pages/dashboard.js"></script>
		<script src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
		<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<?$this->layout_lib->print_additional_js()?>
	</body>
</html>