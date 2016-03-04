<?php
if(isset($_POST['nom'])){
	$nom=$_POST['nom'];
	}
else { echo "non declarée ou saisie non faites";}

if (isset ($_POST['email'])){
	$email=$_POST['email'];
	}
else { echo "non declarée ou saisie non faites";}

if (isset ($_POST['tel'])){
	$tel=$_POST['tel'];
	}

if (isset ($_POST['type']))
	{$type=$_POST['type'];
	}

if (isset ($_POST['previsite'])){
	$previsite=$_POST['previsite'];
	}

if (isset ($_POST['description'])){
	$description=$_POST['description'];
	}
else { echo "nom declarée ou saisie non faites";}
echo "Votre demande a bien été prise en compte <br/>\n";
echo "Nom : ".$nom."<br/>\n";
echo "Email : ".$email."<br/>\n";
echo "Télephone : ".$tel."<br/>\n";
echo "Type de demande : ".$type."<br/>\n";
echo "Premiere visite ?: ".$previsite."<br/>\n";
echo "Message : ".$description."<br/>\n";
?>

