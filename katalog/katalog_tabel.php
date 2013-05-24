<?php
$pagenum=$_GET['pagenum'];
$query=" SELECT * from  produk ";
//$result=mysql_query($query) or die(mysql_error());
if (!(isset($pagenum))) { 
	$pagenum = 1; 
}
$data=mysql_query($query) or die(mysql_error());
$rows = mysql_num_rows($data); 
//This is the number of results displayed per page 
$page_rows = 20; 
//This tells us the page number of our last page 
$last = ceil($rows/$page_rows);
//this makes sure the page number isn't below one, or more than our maximum pages 
if ($pagenum < 1) {
	$pagenum = 1;
}
elseif ($pagenum > $last) {
	$pagenum = $last; 
}
//This sets the range to display in our query 
$max = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
//This is your query again, the same one... the only difference is we add $max into it
$result = mysql_query("SELECT * FROM produk $max") or die(mysql_error()); 
?>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Merk</th>
				<th>harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
<?php
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_object($result)){
?>		
			<tr>
				<td><?=$no;?></td>
				<td><?=$rows -> nama;?></td>
				<td><?=$rows -> merek;?></td>
				<td>Rp. <?=$rows -> harga;?>,00</td>
				<td><a href="katalog.php?mod=chart&pg=chart&action=add&id=<?=$rows->idproduk?>">beli</a></td>
			</tr>
			<?
$no++;
}
?>
	</tbody>
	<tfoot>
        <tr>
          <th colspan="5">
			<?php
			// First we check if we are on page one. If we are then we don't need a link to the previous page or the first page so we do nothing. If we aren't then we generate links to the first page, and to the previous page.
			if ($pagenum == 1) {

			}
			else {
				echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=1'>First</a> ";
				echo " | ";
				$previous = $pagenum-1;
				echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$previous'>Previous</a> ";
				echo " | ";
			}
			//This does the same as above, only checking if we are on the last page, and then generating the Next and Last links
			if ($pagenum == $last) {

			} 
			else {
				$next = $pagenum+1;
				echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$next&no=$no'>Next</a> ";
				echo " | ";
				echo " <a href='{$_SERVER['PHP_SELF']}?pagenum=$last'>Last</a> ";
			}
			?>
          </th>
        </tr>
    </tfoot>
	</table>
<?php
echo "<p>";
// This shows the user what page they are on, and the total number of pages
echo " --Page $pagenum of $last-- <p>";
?>