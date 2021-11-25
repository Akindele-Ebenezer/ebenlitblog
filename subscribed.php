<style>
	form, .section-2-post p {
		display: none;
	}
</style>
<?php
include "config.php";
if(isset($_POST["email"])) {  
	$email = $_POST["email"];

	$sql_inbox = "INSERT INTO admin_inbox_subcribers (email) VALUES ('$email');";
	$query_inbox = mysqli_query($conn, $sql_inbox);
}


$author = "Ebenezer";
$title = "Subscribed...";
$content = "We will be sending interesting contents to $email. <br>EXPLORE...";

include "blog-temp.php";
?>
