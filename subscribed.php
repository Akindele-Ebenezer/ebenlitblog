<style>
	form, .section-2-post p {
		display: none;
	}
</style>
<?php
include "config.php";
if(isset($_POST["submit"])) {  
	$email = $_POST["email"];

	$sql_inbox = "INSERT INTO admin_inbox_subcribers (email, date) VALUES ('$email', now());";
	$query_inbox = mysqli_query($conn, $sql_inbox);
}


$author = "Ebenezer";
$title = "Subscribed...";
$content = "We will be sending interesting contents to $email. <br>EXPLORE...";

include "blog-temp.php";
?>
