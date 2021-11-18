<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO ola_mi_kun_6_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', '$date');";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM ola_mi_kun_6_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "IN LOVE WITH A RUTHLESS MAFIA LORD (EPISODE 6)";
$date = "October 28, 2021";
$author = "Ola Mi Kun";
$content = "I sat down in the house waiting for Serena to come back home since yesterday, am sure that she lost the money, that's why she is not yet home,I will flog the living day light out of her today, should I go look for cain that I will use to flog her,no,let me allow her to come,so that she will look for the Cain herself 😂,mum, come over and take a look at this video, is this not Serena, Anabella shouted,she is the one oooooo,so,she has been dating a rich man all this while,let's go over there, common go dress up,I said,for what,mom,she asked,to seduce her husband of course,I said, why are u calling him her husband,they are not married na,she said, sorry my darling, common go dress up,ensure that u wear ur skimpy dress and apply enough makeup oooooo,I said,ok mom,she replied with  happiness.
Anabella POV <br><br>
Mom,am ready,I said,ok darling,let's go,she replied.we left the house and took a taxi to his house, I was surprised at how huge and beautiful it was,I was imagining myself as the boss lady of this big house,I will kick out Serena at once.
Serena's POV <br><br>
I sat down alone in the siting room because Stanley escorted martins to his car,when he entered,he slipped and fell on me and our lips meet and he kissed me passionately and took me to his room and we made love for hours until a maid came to tell us that someone is seeking for me, I was surprised because no one knew that I was living here,as I was about to stand up and clean up my body before dressing up, Stanley hold me ànd had another round,we both went to tàke our bath together,when I got to the living room,I saw my aunt and Anabella ( dressed like a slut) baby,am going out,take care of ur guest and don't leave the house, he Said. <br><br>
Sir,pls don't go yet,we came here for u and my darling daughter,àunt said,is she ur àunt,he àsked,yes,I replied.Nelson take them to the dungeon,am not going out again,let me finish up this business.he said.
Wetin Stanley wàn do";

include "blog-temp.php"; 

