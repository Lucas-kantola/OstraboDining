<?php
	define("TITLE", "Team | Östrabo1 Dining");
?>
<!DOCTYPE html>
<html>
<?php include("includes/meta.php") ?>
<body>
	<div class="container">
		<?php include('includes/header.php'); ?>
		<h1 class="titleTeam">Vårt team på Östrabo1</h1>
		<p class="subTeam">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc id aliquet lacinia, nisl nunc tincidunt nunc, id tincidunt purus nunc nec nunc. Sed auctor, nunc sed tincidunt ultrices, nunc nunc lacinia nunc, id lacinia nunc nunc nec nunc. Sed auctor, nunc sed tincidunt ultrices, nunc nunc lacinia nunc, id lacinia nunc nunc nec nunc.</p>
		<?php
		include('includes/arrays.php');

		echo '<div class="team-container">';
		foreach ($teamMembers as $member) {
			echo '<article class="team-member">';
			echo '<img src="img/' . $member['img'] . '.png" alt="' . $member['name'] . '">';
			echo '<h2>' . $member['name'] . '</h2>';
			echo '<h3>' . $member['position'] . '</h3>';
			echo '<p>' . $member['bio'] . '</p>';
			echo '</article>';
		}
		echo '</div>';
		include('includes/footer.php');
		?>
	</div>
</body>
