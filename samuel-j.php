<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO samuel_j_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', '$date');";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM samuel_j_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "THE GATE KEEPER";
$date = "11/3/2021";
$author = "Samuel Jeremiah";
$content = "Raising incense with his words,<br>
His tongues becoming a cloven fire,<br>
Communing with the consuming fire,<br>
His eyes a viscuos fiery blazing furnace,<br>
His face fierce and scary,<br>
The flames of fire evolving out of them,<br>
The watchman ready to die at his post.<br>
With the blood of others he was designed,<br>
Decorated with their bloodstain.<br>
<br><br>
The gate keeper,<br>
The fire tender,<br>
The true path finder,<br>
In their numbers they are gathered.<br>
<br><br>
Girdled in amulet,<br>
Withstanding all odds,<br>
Never is he at ease,<br>
Standing gallantly at his post,<br>
Counting the cost,<br>
A true soldier standing firm,<br>
Never shaken, he is always on his feet.<br>
<br><br>
Always awake like an owl,<br>
With the eagle eyes he watch,<br>
Always at alert in his post,<br>
His eyes going to and fro,<br>
The watchful and vigilant.<br><br>
Always active, destroying the works of the roaring thief.<br>
<br><br>
Oh, I see sleep been far away from his eyes,<br>
Refusing to fall into despising lies,<br>
Slumbering not seen oh his face,<br>
The watchman standing still,<br>
The perfect example of a priest.<br>
<br><br>
Defending the city against intruders,<br>
Protecting it against attacks,<br>
Rebuilding the broken walls,<br>
Burdened with the burdens of others.<br>
Handling the weapon skillfully,<br>
His hands glued to the sword,<br>
Arresting and excuting judgement,<br>
Oh, that the watchmen will arise.<br>
<br><br>
Alas,! Let The Watchment Arise!<br>
<br><br>
© Samuel Jeremiah<br>
TheAlasWriter ✍ ";

include "blog-temp.php"; 

