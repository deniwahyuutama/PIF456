<!DOCTYPE html>
	<head>
		<title>Contoh Percabangan Switch</title>
	</head>
	<body>
		<?php
   			$nilai_web = 'A';
    			switch($nilai_web){
       				case 'A':
            				echo 'Nilai SEMPURNA';
        			break;
        			case 'B':
            				echo 'Nilai BAGUS';
        			break;
        			case 'C':
            				echo 'Nilai SEDANG';
        			break;
        			case 'D':
            				echo 'Nilai KURANG';
        			break;
        			case 'E':
            				echo 'Nilai SANGAT KURANG';
        			break;
        			default:
            				echo 'Nilai TIDAK ADA';
			}
		?>
	</body>
</html>
