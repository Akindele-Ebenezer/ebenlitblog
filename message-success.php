<style>
	form, .section-2-post p {
		display: none;
	}
</style>
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


$author = "Ebenezer";
$title = "Message Sent Successfully...";
$content = "We'll get back to you as soon as possible. Keep sending your contents, luckily yours will be picked and be uploaded. <br><br>EXPLORE... <br>Look up professional writers with skiils.";

include "blog-temp.php";
?>