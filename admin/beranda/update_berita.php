<?php 
include "../slices/header.php"; 
include "../slices/menu.php"; 

$id_berita=$_GET['id_berita'];
$queryBerita=mysql_query("SELECT * FROM home_news WHERE id_news='$id_berita'");
?>


	<div id="three-column">

	</div>
	<div id="page">
		<div class="post">
			<h2 class="title">Berita</h2>
			<form action="update_proses.php" method="post" >
			<table >
			<?php
			while($row=mysql_fetch_array($queryBerita)){
			?>
				<input type="hidden" name="id_berita" value="<?php echo $id_berita;?>"/>
				<tr>
					<td><label for="tanggal" id="admin-label">Tanggal</label></td>
					<td><input type="text" size="12" name="tanggal_berita" id="inputField" /></td>
				</tr>
				<tr>
					<td><label for="judul_berita" id="admin-label">Judul Berita</label></td>
					<td><input type="text" name="judul_berita" id="admin-text" size="25" value="<?php echo $row['judul_news']; ?>"/></td>
				</tr>
				<tr>
					<td><label for="isi_berita" id="admin-label">Isi Berita</label></td>
					<td><textarea id="elm1" name="isi_berita" rows="15" cols="200" style="width: 200%">
						<?php echo $row['isi_news']; ?>
						</textarea>
					</td>
				</tr>
					<td colspan="3">
						<input type="submit" name="Proses" value="Proses" id="admin-submit">
						<input type="button" value="Batal" onclick="location.href='berita.php'">
					</td>
			<?php
			}
			?>
			</table>
		</form>
		</div>
	</div>
</div>


<?php 
include "../slices/footer.php"; 
?>