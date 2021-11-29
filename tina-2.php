<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = mysqli_real_escape_string($conn, $_POST["comment"]);
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO tina_2_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', now());";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM tina_2_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "THE MORE I GROW";
$date = "November 27, 2021";
$author = "Tina Rizk";
$content = " 
<pre>
The more I grow
The more I enjoy being alone
I am not keen in fake courtesy 
And dread hidden hypocrisy 
The more I grow
The more I learn to love myself
To cherish my heart
I am not perfect
But I won't pretend to be what I am not
The more I grow
The more I look on the bright side of life
Even when things look bad
For gratitude is a treasure 
And happiness is a choice, a pleasure 
The more I grow
The more I delve within, in a self discovery journey
I started to give myself more time
And it is with a smile,
That I move ahead on this path, so worthwhile 
T.R.
</pre>
<br><br>
 ";

include "blog-temp.php"; 