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
	$message = mysql_real_escape_string($_POST["contact_message"]); 
	$email = $_POST["email"];

	$sql_inbox = "INSERT INTO admin_inbox (first_name, last_name, message, date, email) VALUES ('$first_name', '$last_name', '$message', now(), '$email');";
	$query_inbox = mysqli_query($conn, $sql_inbox);
}


$author = "Ebenezer";
$title = "Message Sent Successfully...";
$content = "$first_name $last_name, We'll get back to you as soon as possible. Keep sending your contents, luckily yours will be selected and be uploaded. <br><br>EXPLORE... <br>Look up professional writers with skiils.";

include "blog-temp.php";
?>
