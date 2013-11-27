<?php
$host	= 'localhost';
$user	= 'root';
$pass	= '';
$db		= 'deni';

if($conn=mysql_connect($host,$user,$pass)){
	$sel = mysql_select_db($db);
}
else{
	echo 'Gagal koneksi database';
}
?>