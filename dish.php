<?php
	define("TITLE", "Menu | Östrabo1 Dining");
	include('includes/arrays.php');
	?>

<!DOCTYPE html>
<html lang="en">
	<?php include("includes/meta.php") ?>
	<body>
		<div class="container">
		<?php include('includes/header.php');?>

		<h1 class="dish-title">Smakäventyr på tallriken: vår meny</h1>
		<p class="dish-sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, excepturi.</p>
		<p class="dish-sub">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, excepturi.</p>

		<div class="dish-container">
			<?php
			foreach ($menuItems as $dish) {
				echo '<div class="dish-column">';
				echo '<h2>' . $dish['title'] . ": " . '<p class="price">' . $dish['price'] . ' kr</p>' . '</h2>';
				echo '</div>';
			}
			?>
		</div>
		
		<?php include('includes/footer.php'); ?>
	</div>
</body>
</html>


