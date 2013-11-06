<html>
	<head>
		<title>Akses dan manipulasi</title>
	</head>
	<body>
		<?php
			ini_set('display_error', 1);
			require "lat1.1_koneksi.php";
			require "data_handler.php";
			define('mhs', 'mahasiswa');
			data_handler('?m=data');

			ini_set("display errors", 1);
			define('VALID', 1);
		?>
		<br/>
		<a href="?m=logout">Logout</a>
	</body>
</html>