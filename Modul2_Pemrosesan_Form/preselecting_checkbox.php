<!DOCTYPE HTML>
<html>
	<head>
		<title>Preselecting pada CheckBox</title>
	</head>
	<body>

		<form ation="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<table>
			<tbody>
				<tr>Tim ISL Terkuat
					<td><input type="checkbox" name="tim[]" value="persija" checked>Persija Jakarta</td>
					<td><input type="checkbox" name="tim[]" value="arema" checked>AREMA CHRONOUS</td>
					<td><input type="checkbox" name="tim[]" value="deltras">Deltras Sidoarjo <br/></td>
					<td><input type="checkbox" name="tim[]" value="gresik">Persegres Gresik <br/></td>
				</tr>
				<tr>
					<td><input type="submit" value="ok" /> <td>
				</tr>
			</tbody>
			</table>
			</form>

			<?php
			//Ekstrasi Nilai
			if (isset($_POST['tim'])){
				foreach($_POST['tim'] as $key => $val){
				echo $key . ' -> ' .$val . '<br/>';}
			}
			?>
		
	</body>
</html>