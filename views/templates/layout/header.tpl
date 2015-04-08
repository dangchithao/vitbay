<!DOCTYPE html>
<html>
    <head>
        <title>mvc</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="{$base_url}assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="{$base_url}assets/css/bootstrap-theme.min.css" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="{$base_url}assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="{$base_url}assets/js/app/content.js"></script>
    </head>
    <body onload="menu.tabActive('{$tabName}')">
        <!-- Nav menu -->
        <div class="navbar navbar-inverse" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">vitbay.vn</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li id="users"><a href="/users.html">Users</a></li>
					<li id="products"><a href="#">Products</a></li>
					<li id="orders"><a href="/orders.html">Orders <span class="badge">100</span></a></li>
					<li id="members"><a href="#">Members</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Admin <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="glyphicon glyphicon-edit"></i> Edit Acount</a></li>
							<li><a href="#"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>

        <div class="container">