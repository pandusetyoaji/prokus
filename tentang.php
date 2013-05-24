<?php
	require_once "header.php";
	
	$querySekilas=mysql_query('SELECT isi_sekilas FROM profil_sekilas');
?>
		
		<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="main-wrapper-style2">
					<div class="inner">
						<div class="5grid-layout">
							<div class="row">
								<div class="4u">
									<div id="sidebar">

										<!-- Sidebar -->
									
											<section>
												<!--header class="major">
													<h2>PT. Bimarendra Putra</h2>
												</header-->
												<img src="1.jpg" width="250" height="250">
												<!--footer>
													<a href="#" class="button button-icon button-icon-info">Find out more</a>
												</footer-->
											</section>

											<section>
												<header class="major">
												</header>
												<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FPT-BIMARENDRA-PUTRA%2F129495227091927&amp;width=292&amp;height=590&amp;show_faces=true&amp;colorscheme=light&amp;stream=true&amp;border_color&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:590px;" allowTransparency="true"></iframe>
												<br><br>
												<header class="major">
													<h2>Pemensanan Tiket</h2>
												</header>
												 <a href="http://edit.yahoo.com/config/send_webmesg?.target=gallant_first&.src=pg" target="blank"><img border="0" src="http://opi.yahoo.com/online?u=gallant_first&m=g&t=14&l=us"></a>
												
											</section>
								
									</div>
								</div>
								<div class="8u mobileUI-main-content">
									<div id="content">

										<!-- Content -->
									
											<article>
												<header class="major">
													<h2>Tentang PT. Bimarendra Putra</h2>
												</header>
												<span class="image image-full"><img src="images/pof2.jpg" alt="" /></span>
												<?php
												while($row=mysql_fetch_array($querySekilas)){
													echo $row['isi_sekilas'];
												}
												?>	
											</article>
								
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="main-wrapper-style3">
					<div class="inner">
						<div class="5grid-layout">
							<div class="row">
								<div class="8u">

									<!-- Article list -->
										<?php
											require_once "news.php";
										?>
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		<!-- Footer Wrapper -->
			<div id="footer-wrapper">
				<footer id="footer" class="5grid-layout">
					<div class="row">
						<div class="3u">
						
							<!-- Links -->
								<section>
									<h2>Filler Links</h2>
									<ul class="style2">
										<li><a href="#">Quam turpis feugiat sit dolor</a></li>
										<li><a href="#">Amet ornare in hendrerit in lectus</a></li>
										<li><a href="#">Semper mod quisturpis nisi</a></li>
										<li><a href="#">Consequat etiam lorem phasellus</a></li>
										<li><a href="#">Amet turpis, feugiat et sit amet</a></li>
										<li><a href="#">Ornare in hendrerit in lectus</a></li>
										<li><a href="#">Semper mod quis eget mi dolore</a></li>
										<li><a href="#">Amet ornare in hendrerit in lectus</a></li>
										<li><a href="#">Consequat etiam lorem phasellus</a></li>
										<li><a href="#">Amet turpis, feugiat et sit amet</a></li>
										<li><a href="#">Semper mod quisturpis nisi</a></li>
									</ul>
								</section>
						
						</div>
						<div class="3u">
						
							<!-- Links -->
								<section>
									<h2>More Filler</h2>
									<ul class="style2">
										<li><a href="#">Quam turpis feugiat sit dolor</a></li>
										<li><a href="#">Amet ornare in hendrerit in lectus</a></li>
										<li><a href="#">Semper mod quisturpis nisi</a></li>
										<li><a href="#">Consequat etiam lorem phasellus</a></li>
									</ul>
								</section>
						
							<!-- Links -->
								<section>
									<h2>Even More Filler</h2>
									<ul class="style2">
										<li><a href="#">Quam turpis feugiat sit dolor</a></li>
										<li><a href="#">Amet ornare in hendrerit in lectus</a></li>
										<li><a href="#">Semper mod quisturpis nisi</a></li>
										<li><a href="#">Consequat etiam lorem phasellus</a></li>
									</ul>
								</section>
						
						</div>
						<div class="6u">
						
							<!-- About -->
								<section>
									<h2><strong>ZeroFour</strong> by HTML5 Up!</h2>
									<p>Hello! This is <strong>ZeroFour</strong>, a free, fully responsive HTML5 site
									template by <a href="http://n33.co/">n33</a> for <a href="http://html5up.net/">HTML5 Up!</a>
									It's released under the <a href="http://html5up.net/license/">Creative Commons Attribution</a>
									license so feel free to use it for any personal or commercial project (just credit us
									for the design!)</p>
									<a href="http://html5up.net/" class="button button-alt button-icon button-icon-rarrow">More @ HTML5Up.net</a>
								</section>
						
							<!-- Contact -->
								<section>
									<h2>Get in touch</h2>
									<div class="5grid">
										<div class="row">
											<div class="6u">
												<dl class="contact">
													<dt>Twitter</dt>
													<dd><a href="http://twitter.com/n33co">@n33co</a></dd>
													<dt>Dribbble</dt>
													<dd><a href="http://dribbble.com/n33">dribbble.com/n33</a></dd>
													<dt>WWW</dt>
													<dd><a href="http://n33.co">n33.co</a></dd>
													<dt>Email</dt>
													<dd><a href="mailto:aj%20-at-%20n33.co">aj -at- n33.co</a></dd>
												</dl>
											</div>
											<div class="6u">
												<dl class="contact">
													<dt>Snail Mail</dt>
													<dd>
														1234 Fictional Road<br />
														Nashville, TN 00000-0000<br />
														USA
													</dd>
													<dt>Phone</dt>
													<dd>(000) 000-0000</dd>
												</dl>
											</div>
										</div>
									</div>
								</section>
						
						</div>
					</div>
					<div class="row">
						<div class="12u">
							<div id="copyright">
								&copy; Untitled. All rights reserved | Images: <a href="http://fotogrph.com/">Fotogrph</a> + <a href="http://iconify.it/">Iconify.it</a> | Design: <a href="http://html5up.net/">HTML5 Up!</a>
							</div>
						</div>
					</div>
				</footer>
			</div>

	</body>
</html>