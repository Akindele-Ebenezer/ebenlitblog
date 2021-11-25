<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = mysqli_real_escape_string($conn, $_POST["comment"]);
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO tina_rizk_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', now());";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM tina_rizk_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "AWAY";
$date = "November, 2021";
$author = "Tina Rizk";
$content = "I'm back alone<br>
Without her sun<br>
Without her splendor<br>
Without her whisper<br>
Without her touch...
<br><br>
I returned to the exile world,<br>
The the earthly world<br>
The the world of birth and death<br>
The the world of intermittent reunion...<br>
<br><br>
I returned where soil is the homeland<br>
And shadows are the housing<br>
And illusion is the shelter...<br>
I'm back to the hazards of tribulations<br>
Within the echoes of time!<br>
<br><br>
How does the sun of my love vanish from my life?<br>
Why does she leave my world cold<br>
Is it to warm another world?<br>
Why the torment<br>
Why being away<br>
Is it written that we shouldn't unite?<br>
Who wrote it?!<br>
<br><br>
The hand of which fate, and we are the ones who made fate?...<br>
The hand of which goal, and we are the ones who set the goal?...<br>
Where did you travel while we are tired of traveling?...<br>
To which kingdom and you are the one who crowned me king?<br>
Are there thrones more perennial than the throne of our love?!<br>
<br><br>
My eyes are tired of staring<br>
They see nothing but a mirage promise<br>
And a light behind the fog<br>
<br><br>
Where are you my love ...<br>
Did you stray out of my way<br>
Or did I stray between your eyes<br>
Living in exile from myself and from yourself?!...<br>
<br><br>
Did the angel of death rob you again<br>
To the world of long separation...<br>
Or did it rob me from your world?!<br>
<br><br>
Let us, God, return to our original unity<br>
To our spiritual source<br>
We are tired of the game of separation then reunion<br>
Of repeated birth and death!<br>
<br><br>
We are tired of dreams<br>
And of our shadows following us...<br>
<br><br>
We are tired of our footprints following us<br>
Of our echo capturing us<br>
And of the reflection of our faces on the surface of water...<br>
<br><br>
We are tired of a life shattered between time<br>
And of a time divided between ages...<br>
<br><br>
We are tired of walking, of flying!<br>
<br><br>
God! where is she?<br>
Let me hear her voice<br>
See her face<br>
Even in a dream...<br>
For a dream is sometimes the reality of truth<br>
And hope is sometimes the dream of imagination!<br>
<br><br>
God, let us meet for the last reunion<br>
Then go back the last return<br>
Together<br>
To the source of lights!<br>
<br><br>
Inspired from the Arabic book<br>
The Whisperings of Love (JBM)<br>
https://esoteric-lebanon.org/en/whisperings-of-love/
<br><br>
#soulmates #twinflame #esotericlove #esoteric";

include "blog-temp.php"; 

