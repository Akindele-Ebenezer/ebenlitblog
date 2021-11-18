<?php
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO antoniette_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', '$date');";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM antoniette_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$title = "EVERYTHING IS GOING TO BE OKAY";
$date = "November, 2021";
$author = "Antoniette Dy Tubale";
$content = "What you are bearing<br>
Right now is just only<br>
A temporarily pain of life.<br>
<br><br>

You'll getting better<br>
And getting much stronger<br>
Than you used to be.<br>
<br><br>

Just feel the pain<br>
Until it heals the wounds<br>
That you carry through life.<br>
<br><br>

Everything is going to be okay<br>
At the right and perfect time<br>
Trust in the Lord who still builds you up<br>
<br><br>

Like...Right now.<br>
<br><br>

©Antoniette Dy Tubale | Philippines ";

include "blog-temp.php"; 

