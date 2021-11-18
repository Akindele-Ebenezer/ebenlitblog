<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO ola_mi_kun_14_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', '$date');";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM ola_mi_kun_14_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "IN LOVE WITH A RUTHLESS MAFIA LORD (EPISODE 14)";
$date = "November 11, 2021";
$author = "Ola Mi Kun";
$content = "What are u doing here? I asked Desmond,I should be asking u that instead, Stanley,what's this bastard doing here? He asked,idk,ask her , Stanley said,pah!!! Mrs Davis slapped Desmond and Desmond slapped her thrice also,how dare u slap me,who the hell do u think u are? He said,I am your mother,I shouted,listen and listen well,my mom died right years ago,he said, Desmond!!! I shouted,will u keep shut? He is right,mom,u are dead to us,is it because I still call u mom, listen and listen well,am only doing so because of public talk, Stanley said.
Desmond POV
I stared at Stanley when he raised his voice on mom and shouted guards lock her up in the dungeon, Stanley said,the guards took my worthless mom and she kept on struggling with the guards but she was locked up eventually,Stanley,how could u say such a word to ur mom? Serena asked,pls stay out of this or else I will get angry with u,he said, sister-in-law,don't worry,we will just torture her abit I promise you,I said,eat,he said,am not hungry,I wanna sleep,she said,ok, sister-in-law,sleep tight and dream of me,I said.she went to the room to sleep.<br><br>
Stanley's POV<br><br>
Why should she dream of you? I asked,why can't she dream of me? He asked with a smirk, nothing,she can dream of anyone she wanna dream of anyways,I said,ohh my,is brother jealous,he said ,keep shut,u are too lousy,let's go deal with that bastard,I said,ok bro,let's go,we will finish our discussion later 😅😂🤣.<br><br>
Is Stanley really jealous?😏🤨😉<br><br>
What do u all think bayi oooooo 🤔🙄<br><br>
<br><br>
";

include "blog-temp.php"; 

