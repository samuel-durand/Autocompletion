<?php include('config.php'); 
include('recherche.php');

?>

<?php
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style>
		.container {
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form method="GET">
					<div class="input-group mb-3">
						<input type="text" class="form-control" id="search" name="search" placeholder="Recherche..." value="<?php echo $search; ?>">
						<div class="input-group-append">
							<button class="btn btn-primary" type="submit">Rechercher</button>
						</div>
					</div>
					<div id="search_results"></div>
				</form>
				<?php if(isset($search)): ?>
					<h2>Résultats :</h2>
					<ul class="list-group">
						<?php foreach($resultats as $resultat): ?>
							<li class="list-group-item"><a href="element.php?id=<?php echo $resultat['id']; ?>"><?php echo $resultat['nom']; ?></a></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</body>
</html>


