<?php include('config.php');

if(isset($_POST['query'])) {
	$search = $_POST['query'];
	$query = $bdd->prepare('SELECT * FROM animaux WHERE nom LIKE :search OR espece LIKE :search ORDER BY nom');
	$query->execute(array('search' => $search.'%'));
	$resultats_exact = $query->fetchAll();
	$query = $bdd->prepare('SELECT * FROM animaux WHERE nom LIKE :search OR espece LIKE :search ORDER BY nom');
	$query->execute(array('search' => '%'.$search.'%'));
	$resultats_partiels = $query->fetchAll();

	echo '<ul>';
	foreach($resultats_exact as $resultat) {
		echo '<li><a href="element.php?id='.$resultat['id'].'">'.$resultat['nom'].'</a></li>';
	}
	if(count($resultats_exact) > 0 && count($resultats_partiels) > 0) {
		echo '<hr>';
	}
	foreach($resultats_partiels as $resultat) {
		if(!in_array($resultat, $resultats_exact)) {
			echo '<li><a href="element.php?id='.$resultat['id'].'">'.$resultat['nom'].'</a></li>';
		}
	}
	echo '</ul>';
}
?>

