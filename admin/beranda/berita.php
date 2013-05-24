
<?php 
include "../slices/header.php"; 
include "../slices/menu.php"; 

$queryBerita=mysql_query("SELECT * FROM home_news ORDER BY tanggal_news DESC");
?>


	<div id="three-column">

	</div>
	<div id="page">
		<div class="post">
			<h2 class="title">Berita</h2>
			
			
			<input type="button" value="Tambahkan Berita" onclick="location.href='input_berita.php'" class="tombolc">
			<div id="list-wrapper">
			<?php
				while($row=mysql_fetch_array($queryBerita)){
					?>
					<ul id="list">
					<li>
					<ul>
					<li class="tanggal"><?php echo $row['tanggal_news'];?> </li>
					<li class="judul"><?php echo $row['judul_news'];?> </li>
					
						<?php $isi_berita=nl2br($row['isi_news']);
						$isi=substr($isi_berita,0,50);
						$isi=substr($isi_berita,0,strrpos($isi," ")); ?>
					<li class="isi"><?php echo "$isi...";?> </li>
					
					<li class="extra">
						<a class="tombol2" href="hapus_berita.php?id_berita=<?php echo $row['id_news']; ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a>
						<a class="tombol2" href="update_berita.php?id_berita=<?php echo $row['id_news']; ?>">Update</a>	
					</li>
					</ul>
					</li>
					</ul>
					<?php
				}
			?>
			</div>
			
		</div>
	</div>
</div>


<?php 
include "../slices/footer.php"; 
?>