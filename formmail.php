<?php

//Récupérer les variables $_POST envoyées par le formulaire
//Récupérer les variables $_POST envoyées par le formulaire
$mailexpe = $_POST['Mail'] ;//declaration de la variable mail de l'expediteur
$nomexpe = $_POST['Nom'] ;//declaration de la variable nom de l'expediteur
$objet = $_POST['Objet'] ;//declaration de la variable objet
$message1 = $_POST['Message'] ;//declaration de la variable message




$mail = $_POST['bambootien'] ; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.


$message_html = "<html><head></head><body>	$nomexpe,  vous a envoyé un message depuis le formulaire Bamboo suckers<br /><br />

  <b>Message :</b><br />

  $message1

  <br />


  <b>Mail :</b>'.$mailexpe.'<br />
</body></html>";
//==========

//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========

//=====Définition du sujet.
$sujet = $objet;
//=========

//=====Création du header de l'e-mail.
$header = "From: \"$nomexpe\" <bullich.benjamin@gmail.com>".$passage_ligne;
$header.= "Reply-to: \"$nomexpe\" <$mailexpe>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========

//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.

//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========

//=====Envoi de l'e-mail.
if (($nomexpe != '') && ($mailexpe != '') && ($objet != '') && ($message1 != ''))
{
if (mail($mail,$sujet,$message,$header))
{
  echo '<p>'."Votre message nous est bien parvenu !".'</p>'."\n";
   echo '<a href="index.html">Retour à la page d\'accueil</a>';
}
else
{
  echo '<p>'."L'envoi du mail a échoué, veuillez réessayer SVP.".'</p>'."\n";
};
//==========
}
else {

    // une des 3 variables (ou plus) est vide ...
    echo '<p>'."Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.".' <a href="formumu.php">Retour au formulaire</a></p>'."\n";
  };




?>
