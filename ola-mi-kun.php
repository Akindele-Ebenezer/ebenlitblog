<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO ola_mi_kun_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', '$date');";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM ola_mi_kun_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "IN LOVE WITH A RUTHLESS MAFIA LORD (EPISODE 1)";
$date = "October 20, 2021";
$author = "Ola Mi Kun";
$content = "I was sleeping peacefully on my bed when I felt someone splash water on me, I opened my eyes to see aunt Cynthia and her daughters (Anita and Annabel) in front of me with a bowl of water.I stood up immediately and aunt Cynthia told me to go do the house chores. I quickly took the broom and swept the house,washed the dishes,then I took the dirty clothes out to wash, I was really hungry and tired but aunt Cynthia told me that I won't eat until I finish all my work.Annabel came to tell me that her mom was calling me,I left the clothes to go meet her to avoid beating.Aunt Cynthia told me to go to the bank to withdraw money for her ,I told her that am hungry and she shouted at me to go to the bank for her.
Stanley's POV <br><br>
I wanted to deposit some money (40 million dollars to be precise ) but I can't trust anyone in the company with such a huge money,so I am going to the bank by myself, I left the company and headed to the bank when I got to the bank,I saw a young cute looking girl( wait,did I just call her cute ? ) She looks tired and very hungry,I felt the urge to go meet her and I walked up to her to say 'hi' when she fainted but I was quick to hold her, I felt like holding her in my arms forever,she looks so cute and delicate (omg !!! I called this girl cute twice, God, what's wrong with me bayi ).I took her over to my house and called the doctor to check on her after I finished my business in the bank.She looks so Cute, innocent,naive and adorable while sleeping (this girl is making me go nut,I think I should leave before I do something stupid to her) Geez!!! I feel like kissing her plump,fresh and pink lips ( gosh Stanley, leave now,I stood up and left her room to go drink abit but I ended up getting drunk)
Serena's POV<br><br>
I opened my eyes to see myself in a beautiful room, I remembered that I fainted in the bank and someone held me but who brought me here? Is he the one ? ( The door opened and Stanley walked in)
.";

include "blog-temp.php"; 

