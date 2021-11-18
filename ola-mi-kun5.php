<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO ola_mi_kun_5_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', '$date');";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM ola_mi_kun_5_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "IN LOVE WITH A RUTHLESS MAFIA LORD (EPISODE 5)";
$date = "October 26, 2021";
$author = "Ola Mi Kun";
$content = "Wow, Mirabel your cheek must be hot,right? 🤣😅😂
It's not easy to receive mafia lord slap,ooo, I said with a mocking gaze. Shut up before I slap u, Mirabel said, slap him,let me see u, Stanley said, get out now, Serena said. Who gave u the audacity to send me out, Mirabel said,I did, Stanley said, wow, swrs u will cry home today 😂😅, I said.( Mirabel left in annoyance, Martins bust into a fit of laughter and Stanley frowned his face)
Stanley's POV <br><br>
What are u also waiting for, martins,I asked,u can't send me out of ur house because I came here for your fiancee not u fool, Martins said, are u sick,I said, no,am not,martins said, Stanley,am hungry,Serena said, ok, muibat, where is the food?I asked,this is it, sir, muibat said.( We all sat down and ate the food, then, we went to watch TV, Stanley placed his leg on my thigh and Martins was giving him a' guy u are really in love' look)  <br><br>
Serena's POV <br><br>
OMG!!! She gonna die, oops !! That's was close, Stanley, what do u think will happen to the girl? I asked, she will marry the guy, martins said,she didn't ask u, u Know, Stanley said, oops!! No vex,lover boy 😂😅, martins replied. Common let's go out, Stanley,this place is boring asf, I said ,ok let's go,Stanley replied,am coming also,martins said, no way guy, Stanley shouted . <br><br>
Stanley don dey jealous oooo 😅😂.wetin martins want sef,abi he love Serena ni <br><br>🙄😔";

include "blog-temp.php"; 

