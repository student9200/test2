<?php 
	require("config.php");
	$folder=$_GET['folder']; 
	echo '<meta http-equiv="refresh" content="2; url=secret.php?folder='.$folder.'">';
	echo "</head>";
	$login = $_COOKIE['username'];
	if($folder=="") $adres=$login.'/';
		else $adres=$login.'/z7/uploads/'.$folder.'/';
	if (is_uploaded_file($_FILES['plik']['tmp_name'])) { 
	echo 'Odebrano plik: '.$_FILES['plik']['name'].'<br/>'; 
	move_uploaded_file($_FILES['plik']['tmp_name'], $adres.$_FILES['plik']['name']); 
	} else {echo 'Błąd przy przesylaniu danych!';} 
?>