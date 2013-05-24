<?php 
include "../koneksi.php";
?>
<?php
	$isi_kerjasama=$_POST['isi'];
	$query=mysql_query("UPDATE profil_kerjasama SET isi_kerjasama='$isi_kerjasama'");
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