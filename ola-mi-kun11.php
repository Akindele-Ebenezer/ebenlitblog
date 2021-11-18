<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO ola_mi_kun_11_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', '$date');";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM ola_mi_kun_11_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "IN LOVE WITH A RUTHLESS MAFIA LORD (EPISODE 11)";
$date = "November 6, 2021";
$author = "Ola Mi Kun";
$content = "Serena laid on the bed while the doctor was attending to her,the doctor said that she is fine ,that she just need to rest,the doctor left immediately and my mom walked in. She told me that am going out on a date with Mirabel today but I refused bluntly and sent her out of my room. My lil bro called and he told me that he wanna come visit me,I told him that mom is at my place and he asked of Serena,I already told him everything that happened and he likes her already,he just wants me to marry her because he said that she looks like a good person. Serena waked up and I ended the call with Desmond immediately,why did u stop the call?she asked,no,I was talking to my brother,I replied, really!!can I see a picture of him?she asked,of course, I said and I showed her a pic of Desmond and she said that he looks so much like me and she is really looking forward to meet him,I told her that he is coming tomorrow.
<br><br>
Serena's POV
<br><br>
As soon as I heard that he is coming over the next day,I told Stanley to take me to the market that I wanna buy ingredients to bake cake and chinchin.i saw Stanley's mom in the living room and she asked us where we are going to but Stanley said that it's none of her business and he dragged me outside. I was sad when I remembered that he said that he is getting married to Mirabel,when will u marry her? I asked,idk, Serena,tell me something,do u want me to marry her? He asked,it's none of my business who u marry ,I said with a fake smile. I will only marry her if u want me to do so,I won't marry her until u tell me what u wanna do,he said, whatever,I said,baby,let's get married and elope,he said.what!!!!! 
<br><br>
Will they elope or not? 
<br><br>
Will Stanley marry Mirabel or Serena?

<br><br>
";

include "blog-temp.php"; 

