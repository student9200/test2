<?php
require("config.php");
	//tworzenie nowego folderu uzytkownika	
	$folder=$_POST['folder']; 
	$login = $_COOKIE['login'];
	mkdir($login.'/z7/uploads/'.$folder,0777);
	echo '<meta http-equiv="refresh" content="0; url=secret.php?folder='.$folder.'">';
?>
