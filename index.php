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
      <!--
      <?php
//il vous suffit de mettre votre adresse email a la ligne 35 


//On récupère les valeurs du formulaire
$nomembre = $_POST['nomembre'];
$sex = $_POST['sex'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$jour = $_POST['jour'];
$mois = $_POST['mois'];
$annee = $_POST['annee'];
$adresse = $_POST['adresse'];
$npa = $_POST['npa'];
$localite = $_POST['localite'];                                                           
$tel = $_POST['tel'];   
$nat = $_POST['nat'];
$email = $_POST['email'];

?>
<?php //On créée le message email

$msg = "Sex= $sex 
no membre= $nomembre 
Nom= $nom 
Prénom= $prenom 
Date de naissance= $jour $mois $annee  
Adresse: $adresse 
Npa= $npa 
Localité= $localite
Télephone= $numtel  
Natel= $nat  
Adresse email : $email";

$recipient = "webmaster@net.com"; //On met l'adresse email ou on veut recevoire le mail
$subject = "Formulaire"; //On met le sujet du mail

$mailheaders = "From: Mon site web<> \n"; //depuis où il a été posté


mail($recipient, $subject, $msg, $mailheaders); // message confirmation que le mail a bien été envoyé

echo "<HTML><HEAD>";
echo "<TITLE>Formulaire envoyer!</TITLE></HEAD><BODY>";
echo "<H1 align=center>Merci, $sex $nom </H1>";
echo "<P align=center>";
echo "Votre formulaire à bien été envoyé !</P>";
echo "</BODY></HTML>";

?> -->
      
</fieldset>
	</form>
	
	<fieldset id="connexion"><p class="connecter">Déjà un compte ? <a class="lien" href="se connecter.php">Connectez-vous</a></p></fieldset>
	
  </body>
</html>
