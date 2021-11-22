<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO sohrab_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', now());";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM sohrab_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$title = "Unknown";
$date = "November, 2021";
$author = "Sohrab Amaan";
$content = "I swallowed the pride, the self respect & much more worse my inner instinct of fighting back.<br>
I drew a clear line today to which I'm not gonna pass even if it gets more worse.
<br><br>
I made it clear to myself today, how am I not gonna fight back. Hope it will be more satisfying than arguing over.<br>
I haven't figure it out what to say to myself after today, but I definitely have the answer I was looking for.<br>
All my questions were answered today, and those all opposed me in some manner.
<br><br>
That blessing I was shading into, have turned dark, I don't know when it happened.<br>
The light I was trying to catch through that little window, turned up to be a fake one.<br>
The sky isn't limitless for me now, it's in the set boundaries of four walls & a closed door.<br>
The land I was standing on, have slided into the valley of anger.
<br><br>
My try to catch my fate into my hands have failed today, it vanished like it was never in my hands.<br>
My reasons for my disaster have turned out into excuses, excuses I haven't even made.<br>
My voice lost its power, even if I was talking, it felt like loosing its pitch and then suddenly turned up into silence.<br>
My eyes turned red & teary, maybe it's a stop signal for me to stop looking for hopes.
<br><br>
All I have is me, not ready to give up on myself. However fighting back is not an option, but still I'm ready to do what I did in the past. <br>Give my 200%, till I will change my fate & catch it into my hands again.
<br><br>
- Sohrab Amaan
";

include "blog-temp.php"; 

