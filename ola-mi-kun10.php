<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO ola_mi_kun_10_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', '$date');";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM ola_mi_kun_10_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "IN LOVE WITH A RUTHLESS MAFIA LORD (EPISODE 10)";
$date = "November 5, 2021";
$author = "Ola Mi Kun";
$content = "I woke up to feel a face on my breast and I knew Instantly that it was Stanley. I don't know why he will do this,he is not the type to sleep on ànyone body,he said it the other day. He was fast asleep and I was unable to raise him from my body,so I slept back. I keep on loving him as the day passes.<br><br>
Mirabel POV<br><br>
Stanley's mom called me to tell me that her son is gonna marry me,I was super excited àbout the màtter. I told my friends about it and they said that I should eliminate the girl if she try anything fuñny. Let me even call one of my numerous boyfriends cause am really horñy,king came over to my house and we had sex.when he left Stanley's mom called me that me añd Stanley should go out and have fun.
Stanley's POV<br><br>
I was forced to give in to mom's demand because I know that she will kill Serena and I don't want to lose something that is mine,I can get married to her and Mirabel,I thought.serena walked in and told me that food is ready,I have to tell her now or never, Serena,am getting married to Mirabel,am sorry,I said,Serena fainted immediately.
<br><br>
";

include "blog-temp.php"; 

