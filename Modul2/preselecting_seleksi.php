<!DOCTYPE HTML>
<html>
	<head>
		<title>Preselecting Pada Seleksi</title>
	</head>
	<body>
		<form ation="<?php $_SERVER['PHP_SELF'];?>" method="post">
		<table>
		<tbody>
			<tr>
				<td>Mata Kuliah</td>
				<td>
					<select name="matkul" >
						<option value="Multimedia">Multimedia
						<option value="SKPL">SKPL
						<option value="Web" selected>Web
						<option value="ADSI">ADSI
					</select><br/>
				</td>
			</tr>
			<tr>
				<td><input type="submit" value="ok" /> </td>
			</tr>
		</tbody>
		</table>
		</form>
			<?php
			if (isset($_POST['matkul'])){
				echo $_POST['matkul'];
			}
			?>
		
		
	</body>
</html>