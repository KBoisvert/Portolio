<?php

$nom_error = '';
$courriel_error = '';
$message_error = '';

if(isset($_POST["envoyer"])){
	$formOK = true;
//Nom
		$nom = ($_POST['nom']);//nommer une variable
		if(empty($nom)){
			$nom_error = 'ENTREZ UN NOM';
			$formOK = false;
		}
//Courriel
		$courriel = ($_POST['courriel']); 
		if(empty($courriel)){
			$courriel_error = 'display:inline-block;';
			$formOK = false;
		}

//Message
		$message = ($_POST['message']); 
		if(empty($message)){
			$message_error = 'display:inline-block;';
			$formOK = false;
		}

//Envoie dans la page de confirmation	
		if($formOK){	 
			$to = "karineboisvert@hotmail.com"; // mon courriel
			$from = $courriel; // courriel du client
			$nom;
			$message;
			$subject = "Bonjour";
			$messagereception = $nom . "Votre message a bien été reçu";
			$headers = "From:" . $from;
			$headers2 = "From:" . $to;
			mail($from,$subject,$messagereception,$headers2); 
			mail($to,$subject,$message,$headers); 
		}
}?>