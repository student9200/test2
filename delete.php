<meta http-equiv="refresh" content="0; url=secret.php">
<?php
$login = $_COOKIE['login'];
$plik = $_GET['plik'];
unlink($login.'/z7/uploads/'.$plik);
?>