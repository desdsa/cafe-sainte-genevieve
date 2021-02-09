<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Commande de Café - Ste Ge</title>
    
    <link rel="stylesheet" href="/style.css">  
    <script src="/script.js" defer></script>
    <!-- <?php include("Menu.php"); ?> -->
    
    
  </head>  
  <body>
    <form method="POST" action="LOL.php">
		<fieldset id="inscription" ><legend>Inscription</legend>
	
		 <p class="formulaire">

			<input type="email" name="email" id="email" placeholder="E-mail" required/>
				<br/><br/>
			<input type="texte" name="pseudo" id="pseudo" placeholder="Nom" required/>
        <br/><br/>
			<input type="radio" name="sexe" value="Homme"/>
			<label for="Homme">Homme</label>
			<input type="radio" name="sexe" value="Femme"/>
			<label for="Femme">Femme</label>
       	
				<br/><br/>
			<input type="password" name="mdp" id="mdp" placeholder="Mot de passe" required/>
				<br/><br/>
       		<input type="submit" value="Inscription" id="envoyer" />
       			<br/>
       <br/>
			
       		<strong id="acceptez">En vous inscrivant, vous acceptez nos <a href="conditions.php" target="blank" id="conditions">Conditions d’utilisation</a> et notre <a href="" target="blank" id="politique"> Politique de confidentialité</a>.</strong>
		 </p>
      
</fieldset>
	</form>
	
	<fieldset id="connexion"><p class="connecter">Déjà un compte ? <a href="se connecter.php">Connectez-vous</a></p></fieldset>
	
  </body>
</html>
