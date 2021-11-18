<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO saptarshi_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', '$date');";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM saptarshi_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "THIS IS HOW I FEEL";
$date = "November, 2021";
$author = "Saptarshi Chakraborty";
$content = "The moments I feel,<br>
Surrender is the best option.<br>
Standing up against,<br>
Already tagged a lot of confusion.
<br><br>
I am agitated,<br>
The way I have been thinking.<br>
Though not a boat,<br>
I still feel I am sinking.<br>
<br><br>
I am perplexed,<br>
What should be done?<br>
Pleasure and peace,<br>
Seems long gone.<br>
<br><br>
I could remember,<br>
Not my fault.<br>
Just like pepper,<br>
Everyone prefers salt.<br>
<br><br>
Part of my memory,<br>
Seems erased.<br>
Part of my attention,<br>
Seems engaged.<br>
<br><br>
It's definitely her,<br>
Everything was about her.<br>
Always so close,<br>
Still felt, so far.<br>
<br><br>
I have bestowed myself,<br>
Waiting for her arrival.<br>
Acceptance is a myth,<br>
I was meant to have denial.<br>
<br><br>
My state of existence,<br>
Portrayed my deep presence.<br>
None of it mattered,<br>
I was baffled for my absence.<br>
<br><br>
And it's fair enough,<br>
Dealing the reality with lies.<br>
Just like the beauty of nature,<br>
Which hides whenever it cries.<br>
<br><br>
I have been dealing<br>
With this ample pretention.<br>
Love is subtle,<br>
And what matters is attention.<br>
<br><br>
It's alright,<br>
I got it.<br>
I am gonna stay within.<br>
Those restrictions,<br>
Meant to suppress.<br>
Those social civics,<br>
Meant to depress.<br>
I let her go.<br>
<br><br>
My love wasn't real,<br>
Was it?<br>
My hatred was visible,<br>
Wasn't it?<br>
<br><br>
This is what I felt........<br>
<br><br>
- Saptarshi Chakraborty";

include "blog-temp.php"; 

