<!DOCTYPE HTML>
<html>
	<head>
		<title>Data Seleksi</title>
	</head>
	<body>
		<form ation="<?php $_SERVER['PHP_SELF'];?>" method="post">
			Jenis Kelamin
			<input type="checkbox" name="hobby[]" value="Membaca">Membaca
			<input type="checkbox" name="hobby[]" value="Olahraga">Olahraga
			<input type="checkbox" name="hobby[]" value="Menyanyi">Menyanyi <br/>
			<input type="submit" value="ok" /> 
			</form>
			<?php
			//Ekstrasi Nilai
			if (isset($_POST['hobby'])){
				foreach($_POST['hobby'] as $key => $val){
				echo $key . ' -> ' .$val . '<br/>';}
			}
			?>
		
	</body>
</html>