<?php
/*
 Author: Samuel Walton(samuel.walton@seven-labs.com)
 URL: http://sdw.seven-labs.com
 License: MIT License (MIT)

 Copyright (c) 2013 Samuel Walton (samuel.walton@seven-labs.com)
 Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"),
 to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

 THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
 PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
 OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE
 OR OTHER DEALINGS IN THE SOFTWARE.
 */
 
// performance counter
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>SLMP [<?=$_SERVER['SERVER_NAME'];?>]</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Seven-Labs Messaging Protocol - the future of server automation" />
		<meta name="keywords" content="syslogd, automated monitoring, system management, server administration" />
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css" />
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="js/jquery.dropotron.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<noscript>
			<link rel="icon" type="image/png" href="http://www.seven-labs.com/favicon.png" />
			<link rel="icon" type="image/ico" href="http://www.seven-labs.com/favicon.ico" />
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	</head>
	<body class="no-sidebar">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">
						
							<!-- Header -->
								<header id="header">
									<div class="inner">
									
										<!-- Logo -->
											<h1><a href="#" id="logo"><?=$lang_site_title;?></a></h1>
										
										<!-- Nav -->
											<nav id="nav">
												<ul>
													<li <?php if (empty($_REQUEST['page'])) echo "class=\"current_page_item\"";?>><a href="index.php">Home</a></li>
													<li>
														<span>Account</span>
														<ul>
															<li><a href="#">Profile</a></li>
															<li><a href="#">Settings</a></li>
															<li>
																<span>Reports</span>
																<ul>
																	<li><a href="#">XML</a></li>
																	<li><a href="#">Comma Seperated</a></li>
																	<li><a href="#">SYSLOG RFC</a></li>
																	<li><a href="#">EMail</a></li>
																</ul>
															</li>
															<li>
																<span>Manage</span>
																<ul>
																	<li><a href="#">Restart</a></li>
																	<li><a href="#">Triggers</a></li>
																	<li><a href="http://slmp.seven-labs.com/balancer-manager">Performance</a></li>
																	<li><a href="http://slmp.seven-labs.com/server-status">Status</a></li>
																</ul>
															</li>
															<li><a href="#">Logout</a></li>
														</ul>
													</li>
													<li <?php if ($_REQUEST['page']=="alerts") echo "class=\"current_page_item\"";?>><a href="index.php?page=alerts">Alerts</a></li>
													<li <?php if ($_REQUEST['page']=="events") echo "class=\"current_page_item\"";?>><a href="index.php?page=events">Events</a></li>
													<li <?php if ($_REQUEST['page']=="servers") echo "class=\"current_page_item\"";?>><a href="index.php?page=servers">Servers</a></li>
												</ul>
											</nav>
									
									</div>
								</header>

						</div>
					</div>
				</div>
			</div>
		
		<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="main-wrapper-style1">
					<div class="inner">
						<div class="container">
							<div class="row">
								<div class="12u skel-cell-mainContent">
									<div id="content">

										<!-- Content -->
									