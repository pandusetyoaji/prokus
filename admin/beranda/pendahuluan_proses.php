
<?php 
include "../koneksi.php";
?>
<?php
	$isi_pendahuluan=$_POST['isi'];
	$query=mysql_query("UPDATE home_pendahuluan SET isi_pendahuluan='$isi_pendahuluan'");
	if($query){
	echo "Berhasil update data ke database<br>";
?>
<script language="javascript">document.location.href="index.php";</script>
		
<?php
	}else{
	echo "Gagal input data";
	echo mysql_error();
	}
?>