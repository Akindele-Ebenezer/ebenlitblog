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

The more I grow<br>
The more I enjoy being alone<br><br>
I am not keen in fake courtesy <br>
And dread hidden hypocrisy 
The more I grow<br>
The more I learn to love myself<br>
To cherish my heart<br>
I am not perfect<br>
But I won't pretend to be what I am not<br>
The more I grow<br><br>
The more I look on the bright side of life<br>
Even when things look bad<br>
For gratitude is a treasure <br>
And happiness is a choice, a pleasure <br>
The more I grow<br>
The more I delve within, in a self discovery journey<br>
I started to give myself more time<br>
And it is with a smile,<br>
That I move ahead on this path, so worthwhile <br><br>
T.R.
 
 ";

include "blog-temp.php"; 
