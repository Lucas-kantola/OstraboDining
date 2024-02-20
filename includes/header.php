<div class="banner">
	<img src="img/banner.jpg" alt="Banner Image">
	<div class="nav">
		<a href="index.php" <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="selected"'; ?>>Hem</a>
		<a href="team.php" <?php if(basename($_SERVER['PHP_SELF']) == 'team.php') echo 'class="selected"'; ?>>Lag</a>
		<a href="dish.php" <?php if(basename($_SERVER['PHP_SELF']) == 'dish.php') echo 'class="selected"'; ?>>Meny</a>
		<a href="contact.php" <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="selected"'; ?>>Kontakt</a>
	</div>
</div>