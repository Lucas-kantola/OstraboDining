<?php
	define("TITLE", "Home | Östrabo1 Dining");
	$content = file_get_contents('http://loripsum.net/api');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo TITLE ?></title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="container">
		<?php include('includes/header.php'); ?>
		<h1>Östrabo1 Dining</h1>
		<h4>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere aut a asperiores, cum nobis excepturi inventore, incidunt necessitatibus explicabo ad voluptatem voluptas, iste vel unde. Iusto sequi ipsam voluptates aut!</h4>
		<h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed distinctio non alias unde quos dolorem fuga animi magni ea? Vero expedita voluptatum blanditiis atque totam!</h4>
		<?php include('includes/footer.php'); ?>
	</div>
</body>
</html>