<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = mysqli_real_escape_string($conn, $_POST["comment"]);
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO chator_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', now());";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM chator_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$title = "A DREAM";
$date = "10/25/2021";
$author = "Chator Peace";
$content = "I had a dream
Where life was beyond the realm
Shared in sections and themes
And every spirit had a team.
<br><br>
There was neither poor nor rich
You didn't have to switch
Nothing was beyond your reach
Even the animals seem to teach.
<br><br>
Snake and adders it lacked
Everyone's got your back
No stepping on each others mark
The finest color was absent black.
<br><br>
There was no wrong and no right
You have your civil freedom to write
All nature sings of was light
Indeed, it was a world with might.
<br><br>
Unfortunately soon, I awoke
In the real world where everything broke
The combinations of fire and smoke
And my mouth was held in a stroke.";

include "blog-temp.php"; 

