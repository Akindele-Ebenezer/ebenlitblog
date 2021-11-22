<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO ola_mi_kun_9_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', now());";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM ola_mi_kun_9_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "IN LOVE WITH A RUTHLESS MAFIA LORD (EPISODE 9)";
$date = "November 3, 2021";
$author = "Ola Mi Kun";
$content = "I was still thinking about the whole matter when Stanley barged in and said,what do u want now? Do u also wanna kill me the same way u tried to kill Desmond? Why will I kill u? I asked,why did u tried killing ur own son ? He asked,he is an asthmatic patient,I said,so,no tell me something,so fucking what? He asked with anger,I can't let him bring shame to our family name,I said, whatever but let me warn u clearly, don't,I repeat, don't ever try to touch a strand of Serena's hair not to talk of hurting her, otherwise,u won't like the beast u grew up to become,he said,I will give u two options,either u marry Mirabel or Serena will die,I said,u dare not,he shouted at me,I slapped him and he slapped me back immediately,I was shocked.
Stanley's POV<br><br>
I left in anger because I don't know what I can do for her as I am 
Flashback ❣️😔<br><br>
Big brother!!! Desmond shouted,I heard my brother screaming and I went out to check what wàs going on in when I saw mum forcing Desmond to drink a juice but he kept refusing it and I hit mom's hand so that the drink will fall of her hand,when the drink poured on the rug,the rug burnt immediately,thats when I realized that mom tried giving Desmond acid. I hated her with passion as from that day and I left the country with Desmond because mom will do anything to kill him.<br><br>
Flashback ends 😔☺️<br><br>
I drank beer until I was drunk, that's what always happens to me anytime I remember my brother and how mum tried killing him all because he is an asthmatic patient às if he created himself.<br><br>
Serena's POV<br><br>
I walked out of the room and saw Stanley drinking,I went to sit beside him and asked him what the problem wàs and he said..........,<br><br>
What did he tell her bayi 🤔🙄😏<br><br>
What will Stanley's mom do bayi oooooo <br><br>😭😣
<br><br>
";

include "blog-temp.php"; 

