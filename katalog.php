<?php
	require_once "header.php";

?>
		
		<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="main-wrapper-style2">
					<div class="inner">
						<div class="5grid-layout">
							<div class="row">
								<div class="8u">
									<div id="content mobileUI-main-content">

										<!-- Content -->
									
											<article>
											<h3><a href='katalog.php'>Katalog</a></h3> 
											
											
											<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
<!--shopping cart php-->
<?php
require_once ('inc/config.php');
require_once ('chart/chart.inc.php');
?>
<!--ul>
	<li>
		<a href='katalog.php?mod=chart&pg=chart'>chart (<?//=chartNotification()?>)</a>
	</li>
	<li>
		<a href='katalog.php?mod=katalog&pg=katalog_tabel'><i class='icon-list icon-white'></i></a>
	</li>
</ul--> 
<?php												
$pg = '';
/*
 * PHP Code untuk mendapatkan halaman view masing masing tabel
 */

if(!isset($_GET['pg'])) {

	include ('katalog/katalog_tabel.php');

} else {
	$pg = $_GET['pg'];
	$mod = $_GET['mod'];
	include $mod . '/' . $pg . ".php";
}?>											
<!--end of shhopping cart-->												
											</article>
								
									</div>
								</div>
								<div class="4u">
									<div id="sidebar">

										<!-- Sidebar -->
									
											<section>
												<header class="major">
													<a href="katalog.php?mod=chart&pg=chart" class="button button-medium button-alt button-icon button-icon-info">keranjang (<?=chartNotification()?>)</a>
												</header>
												<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. 
												Praesent semper mod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. 
												Aliquam luctus et mattis lectus sit amet pulvinar. Nam turpis nisi 
												consequat etiam.</p>
												<footer>
													<a href="#" class="button button-icon button-icon-info">Find out more</a>
												</footer>
											</section>
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

										<?php
												require_once "news.php";
											?>

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