<?php
	define("TITLE", "Contact Us | Östrabo1 Dining");
?>

<!DOCTYPE html>
<html lang="en">
	<?php include("includes/meta.php") ?>
</head>
<body>
<div class="container">
	<?php include("includes/header.php") ?>
	<h1>Get in touch with us!</h1>
	<form id="contact-form" action="submit_form.php" method="post">
		<label for="name">Your Name:</label>
		<input type="text" id="name" name="name" required>

		<label for="email">Your Email:</label>
		<input type="email" id="email" name="email" required>

		<label for="message">And Your Message:</label>
		<textarea id="message" name="message"></textarea>
		
		<div class="checkbox-label">
        	<input type="checkbox" id="subscribe" name="subscribe">
        	<label for="subscribe">Subscribe to our newsletter</label>
    	</div>

		<input type="submit" value="Send Message">
	</form>
	<?php include("includes/footer.php") ?>
</div>
</body>
</html>