<?php
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO samuel_jeremiah_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', now());";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM samuel_jeremiah_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$title = "THE POETIC WARLORD";
$date = "12/05/2021";
$author = "Samuel Jeremiah";
$content = "
I am a poet<br>
I carve out the poetic art,<br>
I perform the best writing act,<br>
I inscribe fiery craft.<br>
I sculpture my words,<br>
I master the poetic inking sword.<br>
Masterpiece I create with technique,<br>
Graphically designing words.<br>
<br><br>
I am a writer with muse,<br>
My muse I never lose.<br>
I am the warrior in the poetic battlefield<br>
Standing as the warlord of the hottest poetic zone.<br>
I oscillate my pen amid papers, <br>
I stand stabilized and mastering the act of battle,<br>
With my pen, I bring down giants.<br>
<br><br>
My pen's value has never been relinquished or forfeited,<br>
'Cause I am the poetic warrior who has never been defeated.<br>
Instead of being stained with blood<br>
I am stained with ink.<br>
Though blood be thick my ink is thicker,<br>
Though blood is life my ink is vital.<br>
<br><br>
Framing rhymes <br>
Building intriguing lines.<br>
Writing as the inspiration's flow,<br>
Swinging my pen to and fro,<br>
Standing gallantly and valiantly,<br>
Sagaciously focused as a sage.<br>
Shaping my words,<br>
Carefully molding an exquisite piece.<br>
<br><br>
I am an eminent and prominent writer<br>
Arranging matchless poems,<br>
Incomparable to that of Williams Shakespeare,<br>
Emily Dickinson stands in awe beholding my poem.
I can hear them saying <q>Kudos to poetic warlord</q><br>
<br><br>

Samuel Jeremiah<br>
TheAlasWriter ✍ <br>
";

include "blog-temp.php"; 

