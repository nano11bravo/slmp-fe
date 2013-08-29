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
// Functions file

$page = $_REQUEST['page'];
$func = $_REQUEST["func"];

function updateEvents()
{
global $conn;
?>

<div class="tblData">
<table cellspacing="0" summary="A few test records">
	<tr>
	  <td abbr="Occurence">Occurence (Local)</th>
	  <td abbr="Source Addr">Source Addr</th>
	  <td abbr="Event ID">Event ID</th>
	  <td abbr="Event Data">Event Data</th>
	</tr>
<?php

$result = mysqli_query($conn, "SELECT `events`.`EventID`, `events`.`EventLocalTime`, `events`.`EventTrigger`, `events`.`EventSource`, `events`.`EventData`, `servers`.`ServerAddr`, `servers`.`ServerHostname` 
FROM `events`, `servers` 
WHERE `events`.`EventSource` = `servers`.`ServerAddr` 
ORDER BY `events`.`EventLocalTime` DESC 
LIMIT 0,15;");


$i = 0;
while($row = mysqli_fetch_array($result))
  {
  if ($i > 0) { $tblRowStyle = "alt"; $i = 0; } else { $tblRowStyle = ""; $i++; }
?>
	<tr>
	  <td><?=$row['EventLocalTime']; ?></th>
	  <td><?=$row['ServerHostname'];?></td>
	  <td><?=$row['EventID'];?></td>
	  <td><?=$row['EventData'];?></td>
	</tr>
<?php
  }

?>
</table>
</div>
<br />
<p>
	<a href="javascript:" class="button button-alt button-icon button-icon-info" onClick="$('#tblEvents').load('index.php?func=events');">Refresh Data</a>
</p>
<p>
	<font size="1"> Updates every few seconds.</font>
</p>
<?php
}
function updateAlerts($qs)
{
global $conn;
?>
<div class="tblData">
<table cellspacing="0" summary="A few test records">
	<tr>
	  <td abbr="Occurence">Occurence (Local)</th>
	  <td abbr="Source Addr">Source Addr</th>
	  <td abbr="Event ID">Event ID</th>
	  <td abbr="Event Data">Event Data</th>
	</tr>
<?php
if (!empty($qs))
{
$result = mysqli_query($conn,"SELECT `events`.`EventID`, `events`.`EventLocalTime`, `events`.`EventTrigger`, 
`events`.`EventSource`, `events`.`EventData`, `servers`.`ServerAddr`, `servers`.`ServerHostname` FROM `events`, `servers` WHERE `events`.`EventData` LIKE '%$qs%' AND `events`.`EventSource` = `servers`.`ServerAddr` AND `events`.`EventTrigger` NOT LIKE 'info' ORDER BY `events`.`EventLocalTime` DESC LIMIT 0, 500;");
}
else
{
$result = mysqli_query($conn,"SELECT `events`.`EventID`, `events`.`EventLocalTime`, `events`.`EventTrigger`, 
`events`.`EventSource`, `events`.`EventData`, `servers`.`ServerAddr`, `servers`.`ServerHostname` FROM `events`, `servers` WHERE `events`.`EventSource` = `servers`.`ServerAddr` AND `events`.`EventTrigger` NOT LIKE 'info' ORDER BY `events`.`EventLocalTime` DESC LIMIT 0, 500;");
}
$i = 0;
while($row = mysqli_fetch_array($result))
  {
  if ($i > 0) { $tblRowStyle = "alt"; $i = 0; } else { $tblRowStyle = ""; $i++; }
?>
	<tr>
	  <td><?=$row['EventLocalTime']; ?><br />
	  <?=$row['EventTrigger']; ?></th>
	  <td><?=$row['ServerHostname'];?></td>
	  <td><?=$row['EventID'];?></td>
	  <td><?=$row['EventData'];?></td>
	</tr>
<?php
  }
?>
</table>
</div>
<br />
<p>
	<a href="javascript:" class="button button-alt button-icon button-icon-info" onClick="$('#tblAlerts').load('index.php?func=alerts');">Refresh Data</a>
</p>
<p>
	<font size="1">Updates every few seconds.</font>
</p>
<?php
}
function updateServers()
{
global $conn;
?>
<div class="tblData">
<table summary="A few test records">
	<tr>
	  <td abbr="IPv4 Address" width="25%">IPv4 Address</th>
	  <td abbr="Hostname" width="25%">Hostname</th>
	  <td abbr="Comments" width="50%">Comments</th>
	</tr>
<?php
$result = mysqli_query($conn, "SELECT * FROM `servers`;");
$i = 0;
while($row = mysqli_fetch_array($result))
  {
  if ($i > 0) { $tblRowStyle = "alt"; $i = 0; } else { $tblRowStyle = ""; $i++; }
?>
	<tr>
	  <td><?=$row['ServerAddr']; ?></th>
	  <td><?=$row['ServerHostname'];?></td>
	  <td><font size="1"><?=$row['ServerComments'];?></font></td>
	</tr>
<?php
  }
?>
</table>
</div>
<br />
<p>
	<a href="javascript:" class="button button-alt button-icon button-icon-info" onClick="$('#tblAlerts').load('index.php?func=alerts');">Refresh Data</a>
</p>
<p>
	<font size="1">Updates every few seconds.</font>
</p>
<?php
}
?>