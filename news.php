<?php
	$queryBerita=mysql_query("SELECT * FROM home_news ORDER BY tanggal_news DESC LIMIT 0, 3");
	$querykerjasama=mysql_query("SELECT * FROM hasil_kerjasama ");
	$rowKerja=mysql_fetch_array($querykerjasama);
	
?>
										<section class="box-article-list">
											<h2 class="icon icon-news">News</h2>
											<?php
											while($row=mysql_fetch_array($queryBerita)){
											?>
											<!-- Excerpt -->
												<article class="box-excerpt">
													
													<div>
														<header>
															
															<h3><a href="#"><?php echo $row['judul_news'];?></a></h3>
															<span class="date"><?php echo $row['tanggal_news'];?></span>
														</header>
														<?php $isi_berita=nl2br($row['isi_news']);
														$isi=substr($isi_berita,0,300);
														$isi=substr($isi_berita,0,strrpos($isi," ")); ?>
														<p><?php echo "$isi.....<a href='detail.php?id_news=$row[id_news]'>baca selengkapnya</a>";?></p>
													</div>
												</article>
											<?php } ?>
											

										</section>
								</div>
								<div class="4u">
								
									<!-- Spotlight -->
										<section class="box-spotlight pad-left">
											<h2 class="icon icon-paper">Hasil Kerjasama</h2>
											<article>
												<a href="#" class="image image-full"><img src="images/pic07.jpg" alt=""></a>
												<header>
													<h3><a href="#">PT. Bimarendra Putra</a></h3>
												</header>
												<?php $isi_Kerja=nl2br($rowKerja['isi_hasil']);
														$isiKerja=substr($isi_Kerja,0,130);?>
												<?php echo $isiKerja;?>
												<footer>
													<a href="hasil.php" class="button button-alt button-icon button-icon-paper">Baca Selengkapnya</a>
												</footer>
											</article>
										</section>