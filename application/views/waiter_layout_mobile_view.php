<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="theme-color" content="#2196f3">
		<title>Catering</title>
		<link rel="stylesheet" href="/assets/plugins/framework7/dist/css/framework7.material.min.css">
		<link rel="stylesheet" href="/assets/plugins/framework7/dist/css/framework7.material.colors.min.css">
		<link href="http://fonts.googleapis.com/css?family=Roboto:400,300,500,700" rel="stylesheet" type="text/css">
		<link href="/assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="/assets/css/custom_mobile.css">
		<link rel="icon" href="img/icon.png">
	</head>
	<body>
		<div class="statusbar-overlay"></div>
		<div class="panel-overlay"></div>
		<div class="panel panel-left panel-cover">
			<div class="view navbar-fixed">
				<div class="pages">
					<div data-page="panel-left" class="page">
						<div class="navbar">
							<div class="navbar-inner">
								<div class="center">Left Panel</div>
							</div>
						</div>
					<div class="page-content">
						<div class="content-block">
							 <a href="#" data-panel="right" class="open-panel">Right Panel</a>
						</div>
						<div class="content-block-title">some title</div>
						<div class="content-block">
							<div class="list-block">
								<ul class="left-side-menu">
									<li>
										<a href="#" class="item-link item-content">
											<div class="item-inner">
												<div class="item-title">Αναζήτηση</div>
												<div class="item-after"><i class="fa fa-search fa-lg"></i></div>
											</div>
								  		</a>
									</li>
									<li>
										<a href="#" class="item-link item-content">
											<div class="item-inner">
												<div class="item-title">Τραπέζια</div>
												<div class="item-after"><i class="fa fa-th-large fa-lg	"></i></div>
											</div>
										</a>
									</li>
									<li>
										<a href="/logout" class="item-link item-content external">
											<div class="item-inner">
												<div class="item-title">Αποσύνδεση</div>
												<div class="item-after"><i class="fa fa-sign-out fa-lg"></i></div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="panel panel-right panel-reveal">
			<div class="view view-right">
				<div class="pages navbar-fixed">
					<div data-page="panel-right1" class="page">
						<div class="navbar">
							<div class="navbar-inner">
								<div class="center">Cart</div>
							</div>
						</div>
						<div class="page-content">
							<div class="content-block">
								<a href="#" class="close-panel">close me</a>
							</div>
							<div class="card">
								<div class="card-header">Product</div>
								<div class="card-content">
									<div class="card-content-inner">description</div>
								</div>
								<div class="card-footer">add  remove</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="views">
			<div class="view view-main">
				<div class="pages navbar-fixed">
					<div data-page="index" class="page">
						<div class="navbar">
							<div class="navbar-inner">
							<div class="center">Catering</div>
							<div class="right"><a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a></div>
							</div>
						</div>
						<a href="/orders/new_order" class="floating-button"><i class="icon icon-plus"></i></a>
						<div class="page-content">
							<h2>Dashboard</h2>
							<p><a href="#" class="prompt-title-ok-cancel">Prompt with text, title, Ok and Cancel callback</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="/assets/plugins/framework7/dist/js/framework7.min.js"></script>
		<script src="/assets/plugins/jquery/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="assets/js/mobile_global.js"></script>

	</body>
</html>