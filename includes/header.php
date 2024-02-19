<?php
	include 'includes/arrays.php';
?>
<div class="banner">
	<img src="img/banner.jpg" alt="Banner Image">
	<div class="nav">
		<button <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="selected"'; ?>><a href="index.php">Hem</a></button>
		<button <?php if(basename($_SERVER['PHP_SELF']) == 'team.php') echo 'class="selected"'; ?>><a href="team.php">Lag</a></button>
		<button <?php if(basename($_SERVER['PHP_SELF']) == 'dish.php') echo 'class="selected"'; ?>><a href="dish.php">Meny</a></button>
		<button <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="selected"'; ?>><a href="contact.php">Kontakt</a></button>
	</div>
</div>