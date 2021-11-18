<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO ola_mi_kun_12_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', '$date');";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM ola_mi_kun_12_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "IN LOVE WITH A RUTHLESS MAFIA LORD (EPISODE 12)";
$date = "November 7, 2021";
$author = "Ola Mi Kun";
$content = "I was surprised when he said that we should elope together,I asked him that why should I elope with him? He said that I.......... NVM, I just talked out of stress,am sorry. When we got to the market we bought the ingredients needed to bake a cake and chinchin,I also bought some foodstuffs because I wanna cook for him and his mom once we get home,a lot of the market woman kept on complementing us that we look like husband and wife because we were both on yellow top and black jean,I didn't even realize it until we got to the market.<br><br>
Stanley's pov<br><br>
When we got to a restaurant,we stop by to eat because we are hungry after all the stress we face in the market. We ordered food and was eating peacefully when Mirabel walked in and came to meet me and said that baby ,I was expecting ur call since morning, are u mad? Who the hell do u think u are that I will bother myself to call u? I asked with a smirk,but,Mirabel said,keep shut, I interrupted,she ran out crying and everyone was staring at us,u were too harsh in her,u know, serena said,baby,did I scare u,he asked,no,that's not what we were talking about,she said,stop talking about her or else I will leave here,I threatened,sorry,she said,it's fine,I just so much hate her,I said.<br><br>
Mirabel pov<br><br>
The video of Stanley insulting me is all over the media now,my reputation is ruined, stanley's mom called me and told me not to worry that she will deal with it,am happy that I still have her in my side for the meantime. Once I get married to Stanley,I will get rid of that girl he was eating with in the restaurant,I said.<br><br>
Serena pov<br><br>
I remembered what Stanley told me the night he was drunk as we sat in the car,he told me how his mom tried killing his brother and how she killed his dad,he must have lived a hard life as a boy,no wonder he ended up as a mafia lord.
<br><br>
";

include "blog-temp.php"; 

