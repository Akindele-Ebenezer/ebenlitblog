<?php
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = mysqli_real_escape_string($conn, $_POST["comment"]);
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO chator_5_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', now());";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM chator_5_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$title = "A DAY YOU SHOULDN'T FORGET ";
$date = "01/02/2022";
$author = "Chator Peace";
$content = "
Let's say you're a young adult, an introvert and your name is Peace.<br><br>
 
You're currently in FESTAC, Lagos state. Yesterday, at 12am. You chanted Happy New Year in church. <br><br>

You jumped high, shot bangers and rockets with your friends, male and female. You reeled of happiness. <br><br>

Nelson wants you to go with him to his girlfriend's place but you refused but he didn't hesitate. He was in a hurry so he took Mark with him. That person you were crushing on came too, to invite you to a midnight party and you were so happy to say yes.<br><br>

Which came out as a no. You declined the invitation and that person is vexed. Mumbles never to invite you again and walks away. You scratch your head and decide to go home with the last friend remaining, Blessing. <br><br>

On the way home, you both spoke at length which bothers you even though it shouldn't. Blessing is an introvert whom no one relates with. No one. <br><br>

Blessing went on to tell you how your friends hate you and all but you don't believe. You wave it aside thinking he doesn't want you to spend time with the other people. <br><br>

1 00am.<br><br>

<br>
You get home and Blessing stays outside. That is normal because none of your family members know him. Infact, no one knows him.<br><br>

The sitting room is empty, but you know your parents are home since the TV is one and there's a bottle of wine on the table. You skid across and gulped down a glass full. <br><br>

Barely have you walked to their room when you felt a stinging pain. You don't know why but you'll just fall in mama's hand so she can chase the pain away.<br><br>

Or so you thought. <br><br>

You staggered to the room, hearing hushed voices. You're so weak to knock so you just sit by the door, hoping they'll come out.<br><br>

2 00am<br><br>

<br>
You jumped in a frenzy and rushed outside. Blessing tilts his head to look at you and his expression changes. You knew something changed about you also. He held your hand and walked inside. Your family is in the sitting room and they're happy. <br><br>

"Finally, he's gone and there\'ll be nobody to stand against us", your mom smirked. <br><br>

They toasted to your death and clinked glasses.<br><br>

They couldn\'t see you or Blessing. <br><br>

You run out to meet your friends coming in. Talking happily about your death.<br><br>

One is happy you won\'t be more popular, the other overjoyed because of your crush. You try to tell them you know but your hand just floats.<br><br>

Now, you know why Blessing is an introvert but knows your friend\'s intention. Because he\'s dead and it was only you who saw him. <br><br>

You remembered he warned you about being too trusting and never drink what you didn\'t uncapped but you were stubborn anyways.<br><br>

You remember how passers-by gave you strange looks whenever you walked with Blessing, whispering but you didn\'t care.<br><br>

<br>
Today is Sunday and your family is wailing, your friends are crying a river because they haven\'t seen you since yesterday. Now, you look at them with disgust. <br><br>

It was your friends who first poisoned you. Remember that malt Nelson gave you just after chanting, it was a poisoned drink. Your parents\' wine was just to ensure a job well done. <br><br>

Why did they kill you?<br><br>

Late Uncle Tony had made you his heir in his will so you were a billionaire at 18.<br><br>

Remember that document your parents ensured you sign?<br><br>

That was them taking over the properties and you saying you had a terminal disease. <br><br>

Why does Uncle Tony love you more? He once had a sexual encounter with your mom and you were his biological child.<br><br>

That\'s the same reason your family hates you too.<br><br>

<br> 
You want revenge, but you can\'t. Blessing hasn\'t told you it was him Uncle Tony used for rituals. He was Uncle Tony\'s younger brother. <br><br>

Uncle Tony is just your father\'s friend and not his brother as they claimed before he was poisoned and killed by a car.<br><br>

<br> 
Your ghost somehow stumbled upon this post and you\'re shocked, but you can\'t cry becauseâ€¦<br><br>

<br><br>
GHOSTS DON\'T CRY...<br><br>


<br><br>
Chator Peace<br><br> 
Undefined writer ðŸ’¯<br><br>

© Peace <br><br>
";

include "blog-temp.php"; 

