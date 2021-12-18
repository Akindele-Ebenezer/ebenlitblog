<?php
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO chator_4_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', now());";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM chator_4_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$title = "MAMA IS SO CLUELESSâ€¦";
$date = "12/17/2021";
$author = "Chator Peace";
$content = "

     \"Didn\t I tell you to stop throwing tantrums?\"
 <br>
  \"Didn't I warn you of the consequences of what would happen if you failed?\"
  <br>
 She twisted my ears and I screamed in pain.
  <br>
  \"After all the money I waste yearly, you still bring trash as results to see, right?\"
  <br>
   I shook my head negatively. 
  <br>
 \"See your teacher's remark, it says you play all the time in the class. How can you do that? Let me tell you, if I see this result again\", she hits her chest in a fury, \"I'll skin you alive. Nonsense and ingredients, I pay money and you waste it. If it's easy, go out there and work after all,  you're old enough to do so. I try to make living comfortable for you but you return trash to me\", she screamed her chest heaving. 
  <br> <br>
 \"But mom\", a voice more bold than intended, spoke out, \"I didn't commit any crime, I only came second in class\" I groaned, walking to my wardrobe to change my clothes. 
  <br>
  Thanks to my mom, I have to learn to play violin, dance, go for French and Spanish lessons and still come first at school. Someone, tell this lady I'm not a robot, I'm human for crying out loud.
  <br> <br>
 \"Young lady, you don't walk away when I'm talking to you, I'm not your father.  You'll respect ...\"
  <br>
 \"And you can never be papa\", I retorted and she was taken aback. 
  <br> <br>
 \"You can never be like my father! He's not a manipulating, self-centered person like you who cares about her image outside than what I think of her. I am your daughter and not some robot, haaaa!\" I screamed, throwing my hands in the air. She's pushed me to the wall and I have to retaliate. 
  <br>
 \"Areâ€¦ are youâ€¦ you talking to your mother in that manner?\"
  <br> <br>
 It was obvious it shook her because I've been all obedient and never spoke out.
  <br>
 \"No ma'am, my mother would never put me through a death sentence because of her image. Because she wants to be worshipped\", I spat.
  <br>
  \"Because her pride matters. You're just my passage into this world, you have never been and will never be my mother. If you'll excuse me, I have Spanish and French classes then I'll perfect my dancing steps before going to learn violin, then I'll go back for evening lessons yet not a compliment from you. You, who forced me to do these things. I wished father never died or he should have let me go with him too\".
  <br> <br>
 I wished you weren't my mother 
  <br>
 \"Youâ€¦\" I added coldly, \"Goodbye mother, you hate tardiness\", I bowed and left.
  <br>
 She wouldn't see my tears, I've promised myself. This lady behind me won't see those tears because I am strong. Strong enough to be broken one day. 
  <br>
 I thought school should have been fun, but with her unending rules, it's a death sentence. 
  <br>
  One I'll live everyday before I garner enough strength to break free.
  <br> <br>
  Free from pressure
  <br>
  Competition placed amongst us
  <br>
 Withholding friends and turning us to enemies who would do anything to survive. 
  <br>
  The rich ain't always happy.
  <br>
  We cry too.
  <br> <br>
 Because we seek the happiness that is parallel to our wealth.
  <br>
 Peace <br> <br>
  The undefined. 
 
  <br> <br>
 Chator Peace...
 
";

include "blog-temp.php"; 

