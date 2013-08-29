											<article>
												<header class="major">
													<img src="images/info.png" style="float: left;">
													<h2 style="margin:20px;padding:15px;">Servers</h2>
													<span class="byline">Who is sending this data?</span>
												</header>
												
												<div id="tblServers" style="width: 95%;">
													<div id="swLoader" align="center">
														<img src="images/hb_black.gif" align="center"><br />
														Loading Windows 98... <br />
														<font size="1">Please Wait!</font>
													</div>
												</div>
												<script>
													setInterval(function(){ $("#tblServers").load("index.php?func=servers"); }, 5000);
												</script>						
											</article>