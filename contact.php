<?php
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$message = $_POST["contact_message"]; 
	$email = $_POST["email"];
$sql = "INSERT INTO admin_inbox (first_name, last_name, message, date, email) VALUES ('$first_name', '$last_name', '$message', now(), '$email');";
$query = mysqli_query($conn, $sql);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@500&display=swap" rel="stylesheet">
	<style>
		#header-2-wrapper li:nth-child(2) { 
			background: var(--blue);
			color: #fff;  
		} 
	</style>
	<title>Contact Us</title> 
</head>

<body>
	<main>
		<?php include "header-sm-screen.php"; ?>
	
		<?php include "header.php"; ?>
		
		<div class="contact-form">
			<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
				<div>
					<h1>CONTACT US</h1>
					<h2>Fill out the form below to learn more!</h2>
				</div>
				<div> 
					<input type="text" name="first_name" placeholder="First Name"> 
					<input type="text" name="last_name" placeholder="Last Name"> <br>
					<input type="email" name="email" placeholder="Email"> <br>
					<textarea name="contact_message" placeholder="Write your message"></textarea> <br>
					<button type="submit" name="submit">Submit</button>
				</div>
			</form>
		</div>
		<?php include "footer.php"; ?>
	</main>
</body>

</html>
