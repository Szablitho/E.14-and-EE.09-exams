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
			$conn = new mysqli("localhost","root","","prognoza");

			$select ="select * from pogoda where miasta_id = 1 order by data_prognozy;"; // albo $select = $conn->prepare("select * from pogoda where miasta_id = 1 order by data_prognozy;");
			// $select->execute(); pewnie bedzie potrzebne //jednak nie
			$result=$conn->query($select); //albo $result=$select->get_result();
			if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>". $row["data_prognozy"]."</td>";
				echo "<td>". $row["temperatura_noc"]."</td>";
				echo "<td>". $row["temperatura_dzien"]."</td>";
				echo "<td>". $row["opady"]."</td>";
				echo "<td>". $row["cisnienie"]."</td>";
				echo "</tr>";
			}
			} else { echo "<tr><td>Brak wyników</td></tr>";}
			$conn->close();
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