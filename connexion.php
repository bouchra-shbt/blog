<html>
	<head><meta charset="utf-8">
		<title>ConnexionKitabi</title>
		<link rel="stylesheet" href="cnx.css">
	</head>
<body>
<?php
if(isset($_POST['submit'])){
			$username=($_POST['username']);
			$password=($_POST['password']);
			$repeatpassword=($_POST['repeatpassword']);
			
			if($username&&$password&&$repeatpassword){
				if($password==$repeatpassword){
					$password=md5($password);
					// Connexion à la base de données
						try
						{
							$bdd = new PDO('mysql:host=localhost;charset=utf8', 'root', '');
						}
						catch(Exception $e)
						{
								{
								
		}
	


?>
			

	<form methode="post" action="connexion.php" align="center">

       <p>votre pseudo</p>
	<input type="text" name="username">
	<p>votre password</p>
	<input type="password" name="password"></br></br>
	<input type="submit" value="inscrire" name="submit">

 <a href="ACCUEIL.php" id="cnx">Home</a>
</form>
</body>
</html>
