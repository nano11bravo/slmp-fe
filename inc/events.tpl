											<article>
												<header class="major">
													<img src="images/info.png" style="float: left;">
													<h2 style="margin:20px;padding:15px;">Events</h2>
													<span class="byline">Some results from the database...</span>
												</header>
												
												<div id="tblEvents" style="width: 95%;">
													<div id="swLoader2" align="center">
														<img src="images/hb_black.gif" align="center"><br />
														Calculating String Theory Probability... <br />
														<font size="1">Hang Tight!</font>
													</div>
												</div>
												<script>
													setInterval(function(){ $("#tblEvents").load("index.php?func=events"); }, 5000);
												</script>						
											</article>