<?php
error_reporting(0);
function query($qry) {
	$result = mysql_query($qry) or die("Gagal melakukan query pada :
	 <br>$qry<br><br>Kode Salah : <br>&nbsp;&nbsp;&nbsp;" . mysql_error() . "!");
	return $result;
}

function fetch_row($qry) {
	$tmp = query($qry);
	list($result) = mysql_fetch_row($tmp);
	return $result;
}

function chartNotification() {
	$chart = $_SESSION['chart'];
	if(!$chart) {
		return 0;
	} else {
		// Parse the chart session variable
		$items = explode(',', $chart);
		
		return  count($items);
	}
}

function getQty() {
	$chart = $_SESSION['chart'];
	if(!$chart) {
		return 0;
	} else {
		// Parse the chart session variable
		$items = explode(',', $chart);
		$s = (count($items) > 1) ? 's' : '';
		return count($items);
	}
}

function showchart() {

	$chart = $_SESSION['chart'];
	//print_r($chart);
	if($chart) {
		$items = explode(',', $chart);
		$contents = array();
		foreach($items as $item) {
			$contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1;
		}
		$output[] = '<table id="newspaper-b" summary="2007 Major IT Companies" Profit">';
		$output[] = "<thead><tr><th scope='col'>No</th><th scope='col'>Nama</th><th scope='col'> Harga</th><th scope='col'>jumlah</th><th scope='col'>subtotal</th><th scope='col'>Aksi</th></tr></thead>";
		$output[] = '<form action="katalog.php?mod=chart&pg=chart&action=update" method="post" id="chart">';
$no=1;
		foreach($contents as $id => $qty) {
			$sql = "SELECT * from produk WHERE idproduk = '$id'";
			$result = mysql_query($sql);
			$row = mysql_fetch_object($result);
			$output[] = '<tr><td>' . $no . '</td>';
			$output[] = '<td>' . $row -> nama . '</td>';
			$output[] = '<td>Rp.' . $row -> harga . '</td>';
			$output[] = '<td><input type="text" class="input-mini" name="qty' . $id . '" value="' . $qty . '"  /></td>';

			$output[] = '<td>Rp.' . ($row -> harga * $qty) . '</td>';
			$total += $row -> harga * $qty;

			$output[] = '<td><a href="katalog.php?mod=chart&pg=chart&action=delete&id=' . $id . '" class="btn btn-danger">Hapus</a></td></tr>';
$no++;
		}
		$output[] = "</table>";
		$qty = getQty();
		
		$output[] = '<table id="ver-minimalist">';
		$output[] = '<tfoot><tr><th>total		: Rp.' . $total . '</th></tr><tfoot>';

		$_SESSION['totalbayar'] = $total;
		
		$output[] = '</table>';
		$output[] = '<button type="submit" class="button button-small button-icon button-icon-rarrow">Update cart</button>';
		$output[] = '</form>';
	} else {
		$output[] = '<p>Keranjang belanja masih kosong.</p>';
	}
	return join('', $output);
}
?>