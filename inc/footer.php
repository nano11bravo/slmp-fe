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
 ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>

		<!-- Footer Wrapper -->
			<div id="footer-wrapper">
				<footer id="footer" class="container">
					<div class="row">
						<div class="3u">
						
							<!-- Links -->
								<section>
									<h2>Site Map</h2>
									<ul class="style2">
										<li><a href="#">Alerts</a></li>
										<li><a href="#">Events</a></li>
										<li><a href="#">Servers</a></li>
									</ul>
								</section>
						
						</div>
						<div class="3u">
						
							<!-- Links -->
								<section>
									<h2>Help!</h2>
									<ul class="style2">
										<li><a href="#">Basic Usage</a></li>
										<li><a href="#">Advanced Tools</a></li>
										<li><a href="#">Licenses &amp; About</a></li>
									</ul>
								</section>

						</div>
						<div class="6u">
						
							<!-- About -->
								<section>
									<h2><strong>SLMP</strong> 1.0</h2>
									<p>This application is free software: you can redistribute it and/or modify
									it under the terms of the GNU General Public License as published by
									the Free Software Foundation, either version 3 of the License, or
									(at your option) any later version.<br /></p>
									<a href="http://www.seven-labs.com" class="button" target="_blank">Seven-Labs</a>
									<a href="http://sdw.seven-labs.com" class="button" target="_blank">Dev Blog</a>
									<a href="https://www.seven-labs.net/submitticket.php?step=2&deptid=4&subject=SLMP%20Bug%20Report&urgency=high&message=I%20found%20a%20bug!" class="button button-alt" target="_blank">Report Bug</a>
								</section>
						
						
						</div>
					</div>
					<div class="row">
						<div class="12u">
							<div id="copyright">
								&copy; Seven-Labs, LLC. All rights reserved<br />
								<?php
								$time = microtime();
								$time = explode(' ', $time);
								$time = $time[1] + $time[0];
								$finish = $time;
								$total_time = round(($finish - $start), 4);
								?>
								<small>Generated from <?=$_SERVER['SERVER_NAME'];?> in <?=$total_time;?> seconds.</small>
							</div>
						</div>
					</div>
				</footer>
			</div>

	</body>
</html>
