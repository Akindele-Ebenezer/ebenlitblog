<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO ola_mi_kun_16_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', '$date');";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM ola_mi_kun_16_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "IN LOVE WITH A RUTHLESS MAFIA LORD (EPISODE 16)";
$date = "November 11, 2021";
$author = "Ola Mi Kun";
$content = "I was scared when the guards called me that they can't find Serena anywhere,I ran out of the house and Desmond followed me immediately and I wanted to enter a car when Desmond called one of my driver's to drive us,we drove through an alley road when I saw a man trying to force himself on Serena,I ran out of the car and almost beat the man to death,when Serena dragged me, I pushed her and she fell down,I went to help her up when she suddenly pushed me away and said why are you pretending as of u care for me when u don't really care? 
<br><br>Are u done f**king Mirabel? Who told you I f**ked Mirabel? Is this how much u trust me to believe that I will do that? Is this how low u think of me? Is this all I get for ever loving and trusting you? Common answer me,I shouted at her,then why did u order ur guards to remove her clothes? I asked,I asked them to remove it, Stanley didn't do anything,Desmond said,no,leave her alone,is this how much u love me to even think that I will stoop so low to sleep with that bitch? I said.
Serena's pov
<br><br>
I was hurt when he said those words to me but it was all true,we left the place and they didn't talk to me throughout the ride home,when we got home,Stanley told the maids to take my luggages from his room to one of the guest room and he started crying and Desmond was petting him,all the guards and maids were surprised and went on their knee immediately and I also knelt down in front of him, apologizing and crying seriously when he said that,why can't I be happy in a relationship for once,do u know the reason why I always avoided falling in love because a prophet once told me that it's the girl that I love that will be my weakness but I didn't believe her back then but I believe her now and I am saying this to u that I hate u so much,I am sorry,I said,bro,pls,talk things out with her patiently, Desmond said,why should I? He said,because u love her, Desmond replied,wait,how old is our relationship today? He asked,four months precisely,I said.
<br><br>
Desmond pov
<br><br>
It seems like Stanley really love this girl because I have never seen him cry before,even when dad died, he didn't cry but now he is crying because of a girl,wow,this guy is really strange,I thought, suddenly, Serena fainted and Stanley carried her and ran out,when we got to the hospital,he was crying and accusing himself of causing everything,he said that,I should have allowed her to explain,infact I should have forgiven her,I am really a monster as she said,the doctor suddenly came to us and said,them,sir actually,ur wife is............
<br><br>
Wetin do Serena bayi 🤔🙄
<br><br>
Abi Serena haff die 🙄😏
<br><br>
Stanley finally confessed ooooo 💖💝

<br><br>
";

include "blog-temp.php"; 

