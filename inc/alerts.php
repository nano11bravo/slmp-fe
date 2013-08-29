<?php
$qs = $_REQUEST["q"];
echo $qs;
?>
											<article>
												<header class="major">
													<img src="images/info.png" style="float: left;">
													<h2 style="margin:20px;padding:15px;">Alerts</h2>
													<span class="byline">Oh? You wanted alerts?</span>
												</header>
												
												<div id="tblAlerts" style="width: 95%;">
													<div id="swLoader2" align="center">
														<img src="images/hb_red.gif" align="center"><br />
														Folding Atomic Structures... <br />
														<font size="1">One Moment!</font>
													</div>
												</div>
												<script>
													setInterval(function(){ $("#tblAlerts").load("index.php?func=alerts&q=<?=$qs;?>"); }, 5000);
												</script>						
											</article>