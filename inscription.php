<html>
	<head><meta charset="utf-8">
		<title>Inscription</title>
		<link rel="stylesheet" href="InsStyle.css">
	</head>
	<body>
	<?php
		if(isset($_POST['submit'])){
			$username=htmlspecialchars(trim($_POST['username']));
			$password=htmlspecialchars(trim($_POST['password']));
			$repeatpassword=htmlspecialchars(trim($_POST['repeatpassword']));
			
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
								
						
			
						
			
		
				
		}
	


	?>
		<form method="post" action="inscription.php" align="center">
			<fieldset id="main" align="center">
				<h1>Inscrivez-vous</h1>
				<input type="text" id="nom" placeholder="pseudo"required autofocus name="username"><br>
				<input type="password" id="Mdp" placeholder="Mot de passe" required name="password"><br>
				<input type="password" id="Mdp" placeholder=" Confirmer votre Mot de passe" required name="repeatpassword"><br>
				<input id="valider" type="submit" value="ok" name="submit">
 				<a href="ACCUEIL.php" id="cnx">Home</a>
			</fieldset>
	</form>
	</body>
</html>