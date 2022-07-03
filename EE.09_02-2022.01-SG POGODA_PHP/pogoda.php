<!DOCTYPE HTML>
<html lang="pl">
<head>
<title> Prognoza pogody Wrocław </title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="styl2.css"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<header>
	<section id="hLewy"> 
		<img src="logo.png" alt="meteo">
	</section>
	<section id="hSrodkowy"> 
		<h1> Prognoza dla Wrocławia </h1>
	</section>
	<section id="hPrawy"> 
		<p> maj, 2019r. </p>
	</section>
	</header>
	<section id="glowny">
		<table>
			<th> DATA </th>
			<th> TEMPERATURA W NOCY</th>
			<th> TEMPERATURA W DZIEN</th>
			<th> OPADY [mm/h]</th>
			<th> CIŚNIENIE[hPa]</th>
			
			<?php
			$conn = new mysqli('localhost','root','','prognoza');
			$select = $conn->prepare("select * from pogoda where miasta_id = 1 order by data_prognozy;");
			$select->execute();
			$result=$select->get_result();
			
			while($row=$result->fetch_array()) {
				$data = $row['data_prognozy'];
				$temperatura_noc = $row['temperatura_noc'];
				$temperatura_dzien = $row['temperatura_dzien'];
				$opady = $row['opady'];
				$cisnienie = $row['cisnienie'];
				echo  ''. '<tr><td>'. $data .'</td>'.
				''. '<td>'. $temperatura_noc .'</td>'.
				''. '<td>'. $temperatura_dzien .'</td>'.
				''. '<td>'. $opady .'</td>'.
				''. '<td>'. $cisnienie .'</td></tr>';
				
			}
			/*
			while($row=$result->fetch_row()) {
				for($i=0;$i<=5;$i++) {
				echo ''.'<tr>'.''.'<td>'. $row[$i]. '</td></tr>';
				}
			}
			*/
			
			?>
		</table>
	</section>
	<section id="lewy"> 
		<img src="obraz.jpg" alt="Polska,Wrocław">
	</section>
	<section id="prawy">
		<a href="kwerendy.txt">Pobierz kwerendy</a>
	</section>
	<footer> 
		<p> Stronę wykonał: 02211403353 </p>
	</footer>
	
</body>
</html>