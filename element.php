<?php
include('config.php');
if(isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = $bdd->prepare('SELECT * FROM animaux WHERE id = :id');
	$query->execute(array('id' => $id));
	$animal = $query->fetch();
	if(!$animal) {
		// Si aucun animal n'a été trouvé avec l'ID donné, afficher un message d'erreur
		echo "Aucun animal trouvé avec cet ID.";
		exit();
	}
} else {
	// Si l'ID n'est pas défini dans l'URL, rediriger vers la page d'accueil
	header("Location: index.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Informations sur l'animal</title>
</head>
<body>
	<h1><?php echo $animal['nom']; ?></h1>
	<p>Espece : <?php echo $animal['espece']; ?></p>
	<p>Poids : <?php echo $animal['habitat']; ?></p>
</body>
</html>
