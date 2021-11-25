<?php
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = mysqli_real_escape_string($conn, $_POST["comment"]);
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO chator_2_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', now());";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM chator_2_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$title = "Have you ever been bullied?";
$date = "10/12/2021";
$author = "Chator Peace";
$content = "Oh sorry, body shamed rather. Well, if no, then pay attention.
If yes, then you know the pains, torments and emotional torture.
<br><br>
Those pains don't compare to the pains of betrayal. Being struck by that person you vouch could stand by you and not wash your dirty linens in public. By that person you trust with your life because you think you know them
<br><br>
I loved my uncle so much and the reason wasn't far-fetched. He had taken my sister and I in when we lost our parents. He never discriminated nor did he allow such things from his children. He never gave the preferential treatment but rather favored us more than his children.
<br><br>
I remembered when a classmate mocked me of being an orphan, my uncle was so angry that he almost sued her parents to court for misinformation, telling them to prove that he wasn't my father. It tooks weeks before he agreed to let it off, and of course some tokens. And because I was good in studies, he was always proud of me.
<br><br>
My late father was a respectable man in his community. Selfless and honest so he was known by all before his untimely death. And since my community was oil producing, we were entitled to scholarship till university levels with the condition that we'll always be diligent in our studies. I remembered my uncle bragging that day that I specifically was given two scholarships because I was very intelligent and they were satisfied with my results.
<br><br>
During the course of years, I forgot about it since I attended a public school and we paid less levies. I wasn't truly happy as I was supposed to attend a Federal girls college in Benin City but my Uncle was against it saying I was too young to cope on my own in a faraway city. Another friend decided to train me but my Uncle said I shouldn't be too far away from his eyes and he never trusts those boarding schools, they mete out inhumane treatments.
<br><br>
Nevertheless, I continued studying diligently and whenever he said he was Peace's father, all the teachers respected him and said good things about me. They praised him for my upbringing. Soon, I was done with high school and yet again, he kicked against my choice of university claiming he knows no one there and I should attend the State University his daughter attended. It's better. I didn't complain.
<br><br>
I paid him a surprise visit and I overheard him telling his friend how he killed my parents because my father was posing as a threat to him. And how he still takes my scholarship money worth thousands of naira every month. His plan to put his child up proved difficult so he sychooned the money rather. And he knew I was clueless about it.
<br><br>
I wanted to give him a surprise but I was surprised instead. Now, I guess you understand the pains I'm going through.
<br><br>
© Peace ";

include "blog-temp.php"; 

