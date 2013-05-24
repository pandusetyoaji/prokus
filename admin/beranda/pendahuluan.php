
<?php 
include "../slices/header.php"; 
include "../slices/menu.php";

$queryPend=mysql_query('SELECT isi_pendahuluan FROM home_pendahuluan');
?>


	<div id="three-column">

	</div>
	<div id="page">
		<div class="post">
			<h2 class="title">Pendahuluan Update</h2>
			<form action="pendahuluan_proses.php" method="post" >
				<table>
				<?php
				while($row=mysql_fetch_array($queryPend)){
				?>
					<tr>
						<td><label for="isi_berita" id="admin-label">Pendahuluan</label></td>
					</tr>
					<tr>
						<td>
							<textarea id="elm1" name="isi" rows="15" cols="200" style="width: 200%">
							<?php
								echo $row['isi_pendahuluan'];
							?>
							</textarea>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<input type="submit" name="Proses" value="Proses" id="admin-submit">
							<input type="button" value="Batal" onclick="location.href='berita.php'">
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