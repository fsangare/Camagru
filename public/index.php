<?php

session_start();

?>
<html>
<HEAD>
	<title id="title-doc">Camagru</title>
	<meta content="camagru; sangare; pcadiot; 42; école 42; php" name="keywords">
	<Meta  charset = "UTF-8">
	<link rel="stylesheet" href="css/application.css" />
</head>

<body>
	<center><h1><B> Vous êtes sur Camagru</B></h1></center>
	<br/>
	<br/>
	<br/>
	<p><B><I>Accéder à votre compte :</I></B></p>
	<br/>
	<br/>
	<br/>
	<form method="post" action="../app/src/login.php">
		Pseudo ou adresse mail: <input type="text" name="login" value=""/>
		Mot de passe: <input type="password" name="passwd" value=""/>
		<input type="submit" name="submit" value="OK" />
		<INPUT TYPE="reset" NAME="reset" VALUE="Effacer">
	</form>
	<br/>
	<br/>
	<br/>
	<br/>

<?php
require '../app/src/auth.php';
if (strlen($_SESSION['loggued_on_user']) > 0)
{
?>

<br/>
<a href="../app/src/user_modif.html">Modifier mon mot de passe</a>
		<br />
<a href="../app/src/user_delete.php">Supprimer mon compte</a>
		<br/>
<a href="../app/src/logout.php">Se déconnecter</a>
<br/>
<br/>
<br/>
<a href="../app/src/main_camagru.php"><h2><p>	Vous étes connecté(e) !<br/><br/></P></h2></a>

<?php
}
else
{
 ?>

 <a href="../app/src/user_create.php">Créer votre compte utilisateur !!!!</a>
 <br/>
 <br/>
 <?php
 }
 ?>

<hr/>
<br/>
<p  class = "copyright"> © Camagru - pcadiot/fsangare 2017 </p>
</body>
</html>
