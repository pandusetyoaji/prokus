<?php 
include "../koneksi.php";
?>
<?php
	$isi_visi=$_POST['isi'];
	$query=mysql_query("UPDATE profil_visi SET isi_visi='$isi_visi'");
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