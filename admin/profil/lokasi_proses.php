<?php 
include "../koneksi.php";
?>
<?php
	$isi_lokasi=$_POST['isi_lokasi'];
	$query=mysql_query("UPDATE profil_lokasi SET lokasi='$isi_lokasi'");
	if($query){
	echo "Berhasil update data ke database<br>";
?>
<script language="javascript">document.location.href="../beranda/";</script>
		
<?php
	}else{
	echo "Gagal input data";
	echo mysql_error();
	}
?>