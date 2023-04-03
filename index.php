<!DOCTYPE html>
<html>
<head>
	<title>Page d'accueil</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#search').keyup(function() {
			var query = $(this).val();
			if(query != '') {
				$.ajax({
					url: "autocomplete.php",
					method: "POST",
					data: {query:query},
					success: function(data) {
						$('#search_results').html(data);
						$('#search_results').show();
					}
				});
			} else {
				$('#search_results').html('');
				$('#search_results').hide();
			}
		});

		$(document).click(function(event) {
			if(!$(event.target).is('#search_results') && !$(event.target).is('#search')) {
				$('#search_results').html('');
				$('#search_results').hide();
			}
		});
	});
	</script>
</head>
<body>
	<div class="search-container">
		<h1>Recherche</h1>
		<form action="recherche.php" method="GET">
			<input type="text" id="search" name="search" placeholder="Rechercher...">
			<button type="submit">Rechercher</button>
			<div id="search_results"></div>
		</form>
	</div>
</body>
</html>
