<?php
/*
 Project: SLMP
 Version: 1.0.0.1
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
 
require "inc/config.php";
require "inc/sql.php";
require "inc/common.php";

// Dynamic (ajax) functions
switch ($func)
{
case "alerts":
$qs = $_REQUEST["q"];
	updateAlerts($qs);
	die();
break;

case "events":
	updateEvents();
	die();
break;

case "servers":
	updateServers();
	die();
break;
}

// Start outputting html
require "inc/header.php";

switch($page)
{
	// alerts page (not done)
	case "alerts":
		$qs = $_REQUEST["q"];
		require "inc/alerts.php";

	break;

	// events page
	case "events":

		require "inc/events.tpl";

	break;
	
	// servers page (not done)
	case "servers":

		require "inc/servers.tpl";

	break;

	// default page
	default:

		require "inc/index.tpl";

	break;
}
require "inc/footer.php"; 

?>
									