<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8">
    <title>PAS Zadanie 7 - katalogi</title>
    <meta name="description" content="Bootstrap Tab + Fixed Sidebar Tutorial with HTML5 / CSS3 / JavaScript">
    <meta name="author" content="Untame.net">
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> -->
    <script src="assets/bootstrap.min.js"></script>
        
	<script src="assets/secret.js"></script>
    <link href="assets/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/secret.css" rel="stylesheet" type="text/css" media="screen">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 
</head>

<body>

<div class="navbar navbar-fixed-top navbar-inverse">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand">Zadanie 7 -  GIT & iCloud</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li><a href="register.php">Register</a></li>
          <li class="divider-vertical"></li>
          <li><a href="logout.php">Log Out</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="container hero-unit">
    <h2>Witaj <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>!</h2>
    <p>Utwórz swój katalog na serwerze</p>
    <div id="folder">
	    <form method="post" action="folder.php">
        Nazwa:<input type="text" name="folder" maxlength="20" size="20"><br>
        <input type="submit" value="Utwórz"/>
        </form>
	</div>
	<div id="breadcrumb">&nbsp;</div>
    <p>Dodaj plik na serwer</p>
    <div id="upload">
    	<form action="odbierz.php?folder=<?php echo $_GET['folder']; ?>" method="POST" ENCTYPE="multipart/form-data">
        <input type="file" name="plik"/> 
        <input type="submit" value="Wyślij plik"/> 
        </form>
    </div>
    <div id="breadcrumb">&nbsp;</div>
    
   
    
    
</div>
</body>
</html>