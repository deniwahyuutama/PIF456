<html>
	<head>
		<title> Contoh Logika </title>
	<head>
	<body>
		<?php
			$x = 1;
			$y = 0;
			echo "=----------------------**--------------------------=";
			echo "<br>a = 1 </br>";
			echo "b = 0 </br>";
			if ($x == 1 &&  $y == 0)
 				{echo" a = 1 dan b = 0 --> a && b = BENAR";}
			else
    				{echo" a = 0 dan b = 0 --> a && b = SALAH";}
			echo "<br>=----------------------**--------------------------=";
			
			echo "<br></br>";
			echo "=----------------------**--------------------------=";
			$x = 1;
			$y = 0;
			echo "<br>a = 1</br>";
			echo "b = 0</br>";
			if ($x == 0 || $y == 1)
				{echo"a = 0 dan b = 0 --> a || b = BENAR";} 
			else
    				{echo"a = 0 dan b = 0 --> a || b = SALAH !!!";} 
 			echo "<br>=----------------------**--------------------------=";
			
			echo "<br></br>";
			echo "=----------------------**--------------------------=";
			$x = 1;
			$y = 0;
			echo "<br>a = 1</br>";
			echo "b = 0</br>";
			if ($x == 0 Xor $y == 1)
 				{echo"a = 0 dan b = 1 --> a XOR b = BENAR";}
 			else
 				{echo"a = 0 dan b = 1 --> a XOR b = SALAH !!!";}
			echo "<br>=----------------------**--------------------------=";
			
			echo "<br></br>";
			echo "=----------------------**--------------------------=";
			$x = 1;
			$y = 0;
			echo "<br>a = 1</br>";
			echo "b = 0</br>";
			if ($x == 0 Xor $y == 0)
				{echo"a = 1 dan b = 0 --> a XOR b = BENAR</br>";}
 			else
   				{echo"a = 1 dan b = 0 --> a XOR b = SALAH !!!";}	
			echo "=----------------------**--------------------------=";
		?>

</body>
</html>