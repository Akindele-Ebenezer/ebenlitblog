<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO sunita_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', '$date');";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM sunita_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "EXTRA MARITAL AFFAIR";
$date = "November, 2021";
$author = "Sunita Grover Raina";
$content = "A matter to think about<br>
With a cool mind<br>
Why people get entangled in them<br>
Surely not for fun<br>
<br><br>
For there are ways which society<br>
has made specially for men<br>
Existing openly<br>
Throughout world<br>
And they do not soil<br>
the pure nuptial knots<br>
<br><br>
Only women spoil them<br>
Society has not given<br>
them such licensed places to go openly<br>
It is taboo as only men are<br>
flesh and blood<br>
And women born saints<br>
with no desires or emotions<br>
<br><br>
But if two pure souls<br>
tortured in love<br>
Crave love and share feelings<br>
and find solace in each other<br>
to live this life with some peace<br>
It is a big crime they do<br>
Labelled extra marital affair<br>
<br><br>
Yes an affair but still not a crime<br>
Why does this pinch both the genders more<br>
This extra marital affair<br>
When rapes<br>
Sexual torture of women<br>
and brothels flourish<br>
And they are quiet about it<br>
<br><br>
Think with a cool mind<br>
It is because of jealousy<br>
For they crave it too<br>
They too live in the debris<br>
of their relations<br>
They too want love<br>
but do not have the guts<br>
So it is labelled a no no<br>
as they could not get it<br>
As they could not step out<br>
<br><br>
No crime they do these people<br>
They just collect some love and go back to their<br>
crumbled relations due to other attachments<br>
waiting at home<br>
Fulfilling their duties<br>
and keeping themselves alive<br>
by these bits and pieces of love<br>
they share within themselves.<br>
<br><br>
An extra relation they dare to tread<br>
Though labelled married<br>
attaching another label to their souls.<br>
They have a life to live too.<br>
They have a right to live too.<br>
<br><br>
Extra marital affair<br>
A name unfair<br>
For a relation in despair to repair<br>
Lost love and flow of tears<br>
<br><br>
©sunita grover raina2021.<br>
photo credit to owner";

include "blog-temp.php"; 

