<html xmlns="http://www.w3.org/1999/xhtml">

 
<head>
	<title>Admin</title>
</head>
<body>

<?php
			if(($_POST['username']=='deni') AND ($_POST['password']=='duor')) {
			echo '<center>Proses Login Berhasil!!!</center>';
			echo '<br><center>Halo : '.$_POST['username'];
		}

		
		else {
			echo "<center>Proses Login Tidak Berhasil!!!</center>";
			echo "<br><center>Username dan Password Tidak sesuai</center>";
			echo "<br><center>Klik <a href='Login.html'>Kembali</a> untuk mengulang.</center>";
		}
		?>

</body>

</html>
