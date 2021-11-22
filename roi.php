<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO roi_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', now());";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM roi_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "Miss Angela just got verified";
$date = "09/15/2021";
$author = "Roi Peejay";
$content = "Miss Stella just got a new car
Mrs Davids just got 80,000 followers on her Facebook account
<br><br>
Ahhh, God am I a spoon? Linda asked.
<br><br>
She couldn't help but notice the success of various ladies whenever she logged in to her Facebook app.
<br><br>
She wanted to be like them--- she wanted her own car, verification blue tick and thousand of followers on her Facebook account.
<br><br>
After much contemplation, she decided to take matters into her own hands.
She called Anabel (her bestie wey sabi road) who had previously told her about a very powerful Babalawo (witch doctor) she once got love portions and charms from.
<br><br>
They discussed and chose the particular day to visit the witch doctor.
It was a Tuesday morning when they set out on this escapade, few hours later they had arrived, they got down from the car, then Anabel led her further on foot till they arrived at a very serene and bushy area filled with ancient idols and juju items.
<br><br>
Linda told the Witchdoctor all she wanted and he did some incantations after collecting money from her, then he gave her a black calabash and told her to 'Drink from the Calabash every day at exactly 7 pm for the next seven days and her wish will be granted, but IF she fails to follow the instructions for the seven days, she will lose a loved one, and the charm will lose its potency.
She agreed to his terms and left with the calabash.
<br><br>
Linda obeyed the instructions for the first few days until one fateful day, she closed from work by 6 pm as usual and boarded a bus to where she stays when they encountered a huge holdup on the only route that led to her house.
<br><br>
A tanker filled with fuel fell on the road ahead of them so, all the cars had to stop a distance from the incident because a spark from a car's tyre close to the fuel will cause an explosion. So, they had no choice but to wait for the fuel to dry off from the coal tar before they will pass.
<br><br>
While waiting in the bus, Linda looked at her time and it was 06:58 pm, ah 2 minutes to go, she wished she could become a bird and fly above every car, arrive home before 7 pm, obey the instructions and avoid the pain of losing a loved one but she couldn't, it was too late.
<br><br>
She got a call from her sister at 7:15 pm, informing her that her mother who was hale and hearty just collapsed and died some minutes ago, little did they know that Linda's actions were the cause of their Mother's sudden demise.
<br><br>
Linda was dumbfounded and confused, she just caused the death of her single mother, who had worked tirelessly to send her and her siblings to the primary, secondary and tertiary institutions after their father died 20 years ago.
<br><br>
All because she was desperate, eager and impatient. She wanted to jump the process and get all her heart desires overnight, little did she know that all the influence, popularity and success been displayed by these women were not gained in a day or a week.
<br><br>
It took months and even years of hard work, Determination, Perseverance and Consistency.
<br><br>
© Roi Peejay";

include "blog-temp.php"; 

