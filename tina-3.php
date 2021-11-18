<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO tina_3_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', '$date');";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM tina_3_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "MISERY";
$date = "November, 2021";
$author = "Tina Rizk";
$content = "Let's return to our eternity, my love<br>
And continue to the paradise of the first unity<br>
The world of the first encounter<br>
Where there is no separation...
<br><br>
Here<br>
In the earthly world,<br>
The world of separation<br>
The world of artificial encounter<br>
The world of echo and image<br>
The world of birth and death<br>
I feel in exile from myself without you!<br>
<br><br>
Why do I feel you away from me now<br>
As if we live in the realm of the dead!<br>
I see you walking by my side<br>
But my voice doesn't reach you...<br>
It is reflected on the walls of your heart<br>
And resonates in echo across the valleys!...<br>
<br><br>
A terrible nightmare presses on my heart<br>
I look at you, but don't see you!...<br>
I listen to you, but don't hear you!...<br>
I touch you, but don't feel you!...<br>
<br><br>
Why do you look at the horizon?<br>
You used to look into my eyes and see the sea and the horizon<br>
And whisper in my ear and hear the creatures of heaven<br>
You were closer to me than my breath<br>
Where are you now?!<br>
<br><br>
Why this stalemate?...<br>
This awful silence?!<br>
<br><br>
Where is your soul<br>
Where is my soul<br>
Where is my love and where is your completeness<br>
Do you think they remained in the paradise of the first encounter?!<br>
<br><br>
What about the promise to reunite<br>
I'm tired of the chirping of birds<br>
I'm tired of the sound of streams<br>
And if the rustling of leaves<br>
Without you!...<br>
<br><br>
I'm tired of this promised paradise<br>
This lonely ruin<br>
This feigned misery<br>
And this prevailing depression<br>
Without you!...<br>
<br><br>
I miss the melodies of planets<br>
The colors of light<br>
The serenity of soul....<br>
I miss coming back to you!<br>
<br><br>
When we will return to our original paradise?<br>
To our whole world<br>
The world of purity and truth<br>
The world of real love<br>
Where light is not reflected<br>
And where the sun doesn't go down!<br>
<br><br>
Take me out of 'me'<br>
And let's return<br>
Nostalgia is almost hurting me<br>
Keeping me away from myself<br>
From yourself!<br>
<br><br>
Where are you my love...<br>
Did you return without me?!<br>
<br><br>
Inspired from the Arabic book<br>
The Whisperings of Love (JBM)<br>
https://esoteric-lebanon.org/en/whisperings-of-love/
<br><br>
#soulmates #twinflame #esotericlove #esoteric";

include "blog-temp.php"; 

