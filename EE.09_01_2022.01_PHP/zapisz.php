<?php
	$db = new mysqli('localhost','root','','wedkarstwo2022_v01_styczen');
	$query=$db->prepare("INSERT INTO `karty_wedkarskie` (`imie`, `nazwisko`, `adres`, `data_zezwolenia`, `punkty`) VALUES (?, ?, ?, NULL, NULL);");
	$query->bind_param("sss",$_POST['imie'],$_POST['nazwisko'],$_POST['tekst']);
	$query->execute();
	
?>