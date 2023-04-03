<?php

include('config.php');

if(isset($_GET['search'])) {
	$search = $_GET['search'];
	$query = $bdd->prepare('SELECT * FROM animaux WHERE nom LIKE :search OR espece LIKE :search ORDER BY nom');
	$query->execute(array('search' => '%'.$search.'%'));
	$resultats = $query->fetchAll();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Résultats de recherche</title>
</head>
<body>
	<form  method="GET">
		<input type="text" id="search" name="search" placeholder="Recherche..." value="<?php echo $search; ?>">
		<button type="submit">Rechercher</button>
		<div id="search_results"></div>
	</form>
	<?php if(isset($search)): ?>
		<h2>Résultats :</h2>
		<ul>
			<?php foreach($resultats as $resultat): ?>
				<li><a href="element.php?id=<?php echo $resultat['id']; ?>"><?php echo $resultat['nom']; ?></a></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</body>
</html>
