<?php 
include "../koneksi.php";
?>
<?php
	$isi_sekilas=$_POST['isi'];
	$query=mysql_query("UPDATE profil_sekilas SET isi_sekilas='$isi_sekilas'");
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