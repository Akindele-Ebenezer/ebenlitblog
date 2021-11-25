<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = mysqli_real_escape_string($conn, $_POST["comment"]);
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO ola_mi_kun_3_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', now());";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM ola_mi_kun_3_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "IN LOVE WITH A RUTHLESS MAFIA LORD (EPISODE 3)";
$date = "October 23, 2021";
$author = "Ola Mi Kun";
$content = "I and Serena stepped out of my house hand in hand with a sweet smile, the reporters moved towards us instantly asking questions like; <br><br>
🧔 Are u guys dàting, Mr Davis <br><br>
👩‍💼Who is this young lady to you?  <br><br>
👧Is she just ur one night stand or what ? <br><br>
👨What's ur relationship with her ? <br><br>
Enough,she is my girlfriend, we have been dating secretly for more than two months now, I said earning a gasp from the reporters, sir, but I heard that you have a fiancee (they were engaged before birth) called Arson Mirabel, have u end ur relationship with her ? A reporter asked. I never chose to be in a relationship with her by the way and am sure she is listening to me anywhere she is , so listen carefully dear, it's over between us, mom, don't even try threatening me or else I will leave this country forever, I said.
Serena's POV <br><br>
I was surprised when Stanley suddenly grabbed my waist ànd kissed me passionately and romantically in front of the reporters and they snapped us and took alot of videos as they could, he tasted like mint, I love his taste but it's making my tongue hurt even at that, I didn't want to end this, I grabbed him by his collar and pressed myself on him more, he suddenly grabbed my àss and I gasped, which gave him assess to put his tongue in my mouth, I love his taste,touch and everything about him, I feel like am in cloud nine. I felt that he removed something from his hand and put it in his pocket and he removed his mouth from mine making our nose meet.
Stanley's POV <br><br>
I knelt In front of Serena and said ' will u be my woman ?' She looked suprised as she look at the ring and said ' what's the stone made of ?' ' Gem ' I replied ( didn't she hear what I said, I hope she agrees) <br><br>
What do u think Serena will say? See answer oo ' will u be my woman?' And she said ' what's the stone made of ?' Serena ,is that the question? 😂😅🤣";

include "blog-temp.php"; 

