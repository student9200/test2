<?php
$folder=$_GET['folder']; 
$login = $_COOKIE['login'];

$nazwa_folderu = $login.'/z7/uploads/'.$folder; 
$dir = opendir($nazwa_folderu);
  while($a = readdir($dir)) { 
    if($a!='.' or $a!='..') { 
      unlink($nazwa_folderu."/z7/uploads/".$a); 
    }
  }
closedir($dir);
rmdir($nazwa_folderu); 

echo '<meta http-equiv="refresh" content="0; url=secret.php">';
?>