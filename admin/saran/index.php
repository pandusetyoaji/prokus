<?php 
include "../slices/header.php"; 
include "../slices/menu.php"; 

$querySaran=mysql_query("SELECT * FROM saran ORDER BY id_saran DESC");
?>


	<div id="three-column">

	</div>
	<div id="page">
		<div class="post">
			<h2 class="title">Komentar</h2>	
			
			<div id="list-wrapper">
			<?php
				while($row=mysql_fetch_array($querySaran)){
					?>
					<ul id="list">
					<li>
					<ul>
					<li class="tanggal"><?php echo $row['nama_saran'];?> </li>
					<li class="judul"><?php echo $row['email_saran'];?> </li>
					
						<?php $isi_saran=nl2br($row['isi_saran']);
						$isi=substr($isi_saran,0,30);?>
					<li class="isi"><?php echo "$isi...";?> </li>
					
					<li class="extra">
						<a class="tombol2" href="saran_detail.php?id_saran=<?php echo $row['id_saran']; ?>">Baca</a>	
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