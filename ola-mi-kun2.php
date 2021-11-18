<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO ola_mi_kun_2_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', '$date');";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM ola_mi_kun_2_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "IN LOVE WITH A RUTHLESS MAFIA LORD (EPISODE 2)";
$date = "October 23, 2021";
$author = "Ola Mi Kun";
$content = "I cried as I stared at my blood stain on the bed, he is a minster,he raped me of my virginity last night, I feel so empty now,I kicked him and he opened his eyes and said what are u doing here ? I told him that, is that what u wanna say after raping me, you took advantage of my weakness, I hate u, you are a monster. He stared at me with a confused gaze and lifted the duvet to look at our condition to look at our condition to know what happened between us, it seems like he didn't do it purposely but that won't change the fact that he raped me right ? <br><br>
Stanley's POV <br><br>
I was upset with myself for raping her, I asked for her to forgive me which she did then I went to the bathroom to take my bath and I dressed up, as I was about to leave, I heard noise coming from outside and I looked out from the window to know what's happening when i saw  a lot of reporters outside my house, I tried calling my PA to settle it but he said the matter is out of control, and I should try solving it my way. Can u  be my gf for today  Serena ? I asked and she said yes.
Serena's POV <br><br>
I want u to live with me as from today henceforth,ok he said, aiit I replied, common go bath and let's show them how romantic we can be.
What will happen to them ? Will their plan fail? ";

include "blog-temp.php"; 

