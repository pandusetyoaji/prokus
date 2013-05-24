<?php 
include "../slices/header.php"; 
include "../slices/menu.php"; 

$queryLokasi=mysql_query('SELECT lokasi FROM profil_lokasi');
?>
<div id="three-column">

	</div>
	<div id="page">
		<div class="post">
			<h2 class="title">lokasi Update</h2>
			<form action="lokasi_proses.php" method="post">
				<table>
				<?php
				while($row=mysql_fetch_array($queryLokasi)){
				?>
					<tr>
						<td><label for="isi_lokasi" id="admin-label">Lokasi</label></td>
					</tr>
					<tr>
						<td>
							<textarea id="elm1" name="isi_lokasi" rows="15" cols="200" style="width: 200%">
							<?php
								echo $row['lokasi'];
							?>
							</textarea>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<input type="submit" name="Proses" value="Proses" id="admin-submit">
							<input type="button" value="Batal" onclick="location.href='../beranda/index.php'">
						</td>
					</tr>
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