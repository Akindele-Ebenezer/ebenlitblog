<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = mysqli_real_escape_string($conn, $_POST["comment"]);
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO ola_mi_kun_7_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', now());";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM ola_mi_kun_7_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "IN LOVE WITH A RUTHLESS MAFIA LORD (EPISODE 7)";
$date = "October 30, 2021";
$author = "Ola Mi Kun";
$content = "Wow,let me take u guys around the house,boys, prepare the dungeon,I said,why the dungeon,sir, the girl called Annabel asked,oh darling,we will be alone in there and u can tell me about ur sister past,u know,I am curious to know how she lived her past,I said with a fake smile,she can tell u here , Serena said,no let's go to the dungeon sir, Annabel said,ma,follow us also,I said ,ok my son,aunt Cynthia said.( Once am done with them they will never think of maltreating someone else in there miserable and filthy life ) 
Anabella POV <br><br>
Wow,I thinks he likes me,that's why he wants to talk to me in Serena absent,I must seduce him before we come back so that he will send Serena out instantly,I told my mom,ok darling,she replied.common let's go, darling,Stanley said, OMG!!! Am so excited,he keeps on calling me darling,is this a sign that he loves me? I asked myself,let's go,pls,be careful,ma,can u enter that room and wait for us,I wanna talk to her alone,he said,of course,dear, my mom said. go with her,he told two of his guards,let's go darling,he said.
Cynthia's POV <br><br>
As soon as I entered the room,I was tied to the wall and they beat me blue and black the same way I do beat Serena up,I made a promise to myself that If I survive this,I will apologize to Serena and I will never maltreat her again in my life but it seems like they wanna kill me,my mind drifted to my daughter and I asked myself if she is also been treated like this when I saw her been dragged in by some guards after they had beaten her,I regretted ever treating Serena badly,we were tied and placed on top of a burning furnace and the rope will be released a bit so that the heat from the fire will hurt our body .I cried in agony and pain . <br><br>
Serena's POV <br><br>
I slept of in the palour waiting for them,when I woke up,I told a guard to take me to the dungeon,he refused at first but later took me there after a lot of pleading,I walked in and what I saw shocked me.
";

include "blog-temp.php"; 

