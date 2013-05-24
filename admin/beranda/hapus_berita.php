<?php
	include "../koneksi.php";
	$id_berita=$_GET['id_berita'];
	$query=mysql_query("DELETE FROM home_news WHERE id_news='$id_berita'");
	if($query){
		?>
		<script language="javascript">document.location.href="berita.php";</script>
		<?php
	}
	else{
		echo "gagal hapus data";
	}
?>