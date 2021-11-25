<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = mysqli_real_escape_string($conn, $_POST["comment"]);
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO happyman_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', now());";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM happyman_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "PREGNANCY WAHALA";
$date = "11/05/2021";
$author = "Happyman Merciful Ennymoney";
$content = "People on Mark's villa! Not those that will come here to diss me. I'm referring to those that supported me when I had a deadly war with my landlady and are still supporting me now. Am I not done for? Just two months pregnancy and all these is happening. I don't think I can take it anymore. I know some of my enemies will say I still have seven months to suffer but it is well.
<br><br>
God is in control.
<br><br>
What else could I have done than to leave the food. I went out to mummy chinedu, my second neighbor whose shop is in front of the house to buy bread and tea with the last two hundred naira in my pocket.
<br><br>
'Oko mi!!! Won't you give me bread and tea?'
<br><br>
If you see the way I looked at her and hissed, you'll think she poured faeces on her body but this woman didn't care. She was looking at me like I was her sworn enemy the way I was munching my bread and tea until I ate a little more than half of it. Suddenly, she just snatched the rest from me and before I could say anything, it was all in her mouth. My eyes turned red immediately.
<br><br>
'Favour! Are you crazy?? Why did you snatch my bread from me?'
<br><br>
'I snatched it because I wanted to eat too. I'm hungry?'
<br><br>
'You're hungry? Can't you go and eat the ritual sacrifice you prepared?'
<br><br>
If I had known, I wouldn't have said that.
<br><br>
'So you're expecting me to eat a ritual sacrifice? You're a wicked husband. Now I know you don't love me. You want to sacrifice my baby and I for ritual? Is that what you want to do?'
<br><br>
That was how she continued shouting and ranting that I wanted to use her for sacrifice. Just imagine!! She expected me to eat the sacrifice she couldnt eat after working tirelessly, carrying blocks and cements from dawn till dusk.
<br><br>
To those that love me, don't worry, Favour will not kill me. I'll scale through this but let me cry this cry first. 😭😭😭😭
<br><br>
HappHappyman Merciful EnnymoneycHappyman Merciful EnnymoneyyHappyman Merciful";

include "blog-temp.php"; 

