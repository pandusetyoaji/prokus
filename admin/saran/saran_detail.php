<?php 
include "../slices/header.php"; 
include "../slices/menu.php"; 

$id_saran=$_GET['id_saran'];
$querySaran=mysql_query("SELECT * FROM saran WHERE id_saran='$id_saran'");
?>


	<div id="three-column">

	</div>
	<div id="page">
		<div class="post">
			<h2 class="title">Detail Saran</h2>	
			<?php
				while($row=mysql_fetch_array($querySaran)){
					?>
					Nama : <?php echo $row['nama_saran'];?><br>
					Email: <?php echo $row['email_saran'];?><br>
					<?php echo $row['isi_saran'];?><br>
					<?php
				}
			?>
			<input type="button" value="Kembali" onclick="location.href='../saran'" class="tombolc">
		</div>
	</div>
</div>


<?php 
include "../slices/footer.php"; 
?>