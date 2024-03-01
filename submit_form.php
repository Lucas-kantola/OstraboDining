<?php
	define("TITLE", "Contact Us | Östrabo1 Dining");
?>
<!DOCTYPE html>
<html lang="en">
    <?php include("includes/meta.php");?>
<body>
    <div class="container">
        <?php 
            include("includes/header.php");
            if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
                echo '<h2>All fields are required. <a href="contact.php">Go back</a></h2>';
            } else {
                echo '<h2 class="centered-green">Thanks for contacting Östrabol dining! Please allow 24 hours for a response.</h2>';
            }
            include("includes/footer.php");        
        ?> 
    </div>
</body>
</html>