<?php
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = mysqli_real_escape_string($conn, $_POST["comment"]);
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO favour_ekenna_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', now());";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM favour_ekenna_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$title = "Oil";
$date = "11/26/2021";
$author = "Favour Ekenna";
$content = " 

'ππΆπ€π©!!'<br>
'ππ¦π΅πͺπ― π£π¦ π΅π©π’π΅.?'  He asked me without looking back.<br>
'ππ©π¦π΄π¦ π±π°π΅π©π°π­π¦π΄!'  I said with my eyes shut in pain, as I tried to endure the sharp pain on my waist.<br><br>
I looked ahead. I saw more potholes.<br>
More Potholes!!<br>
More glorious potholes!!!<br><br>
The almighty potholes that decorated the roads of Aba.! <br>
And this Driver isn't showing signs of slowing down.<br>
His tricycle is still on full speed, and I am the only one inside his Keke.<br>
'πππ, πππ, πππππ π, πππππ π, ππππΜ£ π§π, π πππ€ πππ€π. π½π’π π‘ π πππ‘, πππ π‘βππ π πππ‘βππππ .' <br>
'πΌπ πΌ π πππ€ πππ€π, π€π ππ ππ ππ ππππ π‘βππ  ππ π πππ€. πππ’ π ππ π‘βππ‘ π‘πππππ π€ππ¦ ππππ πππ πππππ‘.? <br>
πΈπ ππ πππ’π π ππ-π πππ€ π£πππ¦ π πππ.'<br><br>
I looked further and saw it. <br>
That was when I began to notice the frenzy around me.<br>
Different people, the young and middle age alike, running around, searching for what to use to scoop the oil that was oozing from the tanker that fell.<br>  
It was a disaster!. <br>
There is a business lesson to learn from here, but I will talk about it on the Afterthought of this story.<br>
So, <br><br>
Let me continue my story.<br>
I had forgotten about the numerous potholes we were galloping over, as I got lost in the moment. <br>
This scene, <br><br>
Where I saw teenagers, able-bodied men, mothers, and also fathers, running around, carrying buckets and Rubber cans filled with what I presumed to be Diesel, triggered a panic mode in me.<br>
Memories came flying in.<br><br>
.
.
This was in 2018, around the October period.<br>
I had gone to spend a day or two with my brother, who lived away from home.<br>
During the afternoon, My Brother, Stanley, went out with his colleague and bought four new Rubber containers.<br>
He had told me he was on night shift and needed those containers to separate some chemicals they worked with.<br>
So that evening, around 6 pm, his colleague came around, and they left, leaving me behind with all the goodies in his house.<br>
I was watching a movie on my phone and munching on my Chin-Chin as I couldn't sleep before I heard it.<br>
The Big Bang.!<br><br>
No.<br>
I actually felt it. <br>
I felt the vibration, the shock wave from the foundations of the house, to the amako glass on the windows.<br>
I panicked.<br>
'ππ΄ π΅π©π’π΅ π’ π£π°π?π£?'<br>
'ππ΄ π΅π©πͺπ΄ π’ π΅π¦π³π³π°π³πͺπ΄π΅ π’π΅π΅π’π€π¬.?'<br>
'ππ© π?πΊ ππ°π₯!! ππ³π¦ πΈπ¦ π£π¦πͺπ―π¨ π’π΅π΅π’π€π¬π¦π₯.?'<br><br>
I had a thousand questions in my mind, as my body froze due to my panic and anxiety.
Just then, I began to feel hot. I looked out the window and my eyes met a terrific scene.
The blazing red fire rising, pushing the dense cloud of smoke, upwards as it rises.
The fire was so bright that it lit up the one-bedroom apartment of my brother, and the smoke was so dense, that it looked as though it was a solid, as though, a pin couldn't go through it.<br><br>
I immediately took my keys and my phone and instinctively ran out of the room, locking the doors behind me.<br><br>
'ππ¦π΄πΆπ΄! <br>
ππ¦π΄πΆπ΄!! <br>
ππ¦π΄πΆπ΄ ππ©π³πͺπ΄π΅!!! <br>
ππ©π¦ π±πͺπ±π¦π­πͺπ―π¦ π©π’π΄ π¦πΉπ±π­π°π₯π¦π₯! <br>
ππ¦π΄πΆπ΄!'  The neighbor ran out of her room.<br>
I was confused.<br>
I didn't know if I was supposed to be happy it wasn't a terrorist attack, or how exactly I was supposed to feel.<br><br>
I was still breathing hard, trying to calm myself down, when I saw a human figure, a burning human figure, screaming, running around the streets, looking for water, gutter to quench the fire on his body. <br>
I froze. Out of fear, and anxiety. <br>
I looked ahead, and then I saw more. <br><br>
More people, more burning people, running around, setting some houses ablaze as they ran into them in search of water. <br>
They had gone with rubber containers, to scoop oil, from the pipeline. 
They had gone for Bunkering! <br>
With their Rubber Containers.!!!
My Brother!!! <br><br>
He had left the house with some Rubber containers that evening. <br>
'ππ©πΊ πΈπͺπ­π­ π΅π©π¦πͺπ³ π©π¦π’π₯ π°π§ π₯π¦π±π’π³π΅π?π¦π―π΅ π¨πͺπ·π¦ π©πͺπ? π?π°π―π¦πΊ π΅π° π£πΆπΊ π³πΆπ£π£π¦π³ π€π°π―π΅π’πͺπ―π¦π³π΄ π§π°π³ π΅π©π¦πͺπ³ ππ©π¦π?πͺπ€π’π­π΄.?'<br>
'ππ°, π―π°, π―π°, π―π°, π―π°.'.  I said out of frustration and suspicion. <br>
'ππ¦π΅ πͺπ΅ π―π°π΅ π£π¦, π­π¦π΅ πͺπ΅ π―π°π΅ π£π¦.' The tears were forming in my eyes as I tried to unlock my phone.<br>
After some attempts, I successfully unlocked my phone. I went straight to my contacts, and my terrified memory couldn't remember the name I saved his number with.  <br>
'ππ³π¨π©π©π©π©π©!!!'  One of the victims of the fire screamed as he was been poured water by some people who had come out to help.<br><br>
My focus went back to my phone as I tried to remember his contact. <br>
Just then, <br>
My phone rang, <br>
'ππ«π¨ ππ­ππ§ πππ.'<br>
I picked almost instantly, <br>
'ππ¦π­π­π°?' <br>
'ππ¦π­π­π°, ππ¬πΈπΊ?'<br>
'π π¦π΄, ππ©π¦π³π¦ π’π³π¦ πΊπ°πΆ.?'<br>
'π π’π? πͺπ― π΅π©π¦ π§π’π€π΅π°π³πΊ, π’π΅ πΈπ°π³π¬. <br>
π π©π°π±π¦ πΊπ°πΆ π’π³π¦ π΄π’π§π¦.?'<br>
'π π¦π΄, π π’π?.<br>
π πΈπ’π΄ π¦π·π¦π― π΅π³πΊπͺπ―π¨ π΅π° π€π’π­π­ πΊπ°πΆ π«πΆπ΄π΅ π―π°πΈ.'<br>
'ππ©π’π΅ π¦πΉπ±π­π°π΄πͺπ°π―, πͺπ΅ πΈπ’π΄ π΅π©π¦ π±πͺπ±π¦π­πͺπ―π¦ π΅π©π’π΅ π¦πΉπ±π­π°π₯π¦π₯. <br>
ππ©π’π―π¬ ππ°π₯ π π₯πͺπ₯π―'π΅ π­πͺπ΄π΅π¦π― π΅π° ππͺπ¨π¨πΊ.'<br>
'ππͺπ¨π¨πΊ.? ππ©π’π΅ π₯πͺπ₯ π©π¦ π΄π’πΊ?'<br>
'π πΈπͺπ­π­ π΅π¦π­π­ πΊπ°πΆ πΈπ©π¦π― π π¨π¦π΅ π©π°π?π¦ πͺπ― π΅π©π¦ π?π°π³π―πͺπ―π¨.'...<br>
_____
' π π°πΆ π―π° πΈπ°π― π€π°π?π¦ π₯π°πΈπ― π’π¨π’πͺπ―.?' The Keke Driver interrupted my flashback. <br>
'ππ©π―? ππ¬π’πΊ. <br>
ππ°π³π³πΊ. <br>
ππ°πΈ π?πΆπ€π© πͺπ΄ πͺπ΅.?'<br>
'ππ―π¦ ππΆπ―π₯π³π¦π₯ π―π’πͺπ³π’.<br><br> 
ππΆπ΅ πͺπ§ π΅π° π΄π’πΊ ππ°π₯ π΅π°πΆπ€π© πΊπ°πΆπ³ π©π¦π’π³π΅, πͺπ§ πΊπ°πΆ π¨πͺπ·π¦ π?π¦  #300 π°π³ π’π£π°π·π¦ π π¨π° π΄π΅πͺπ­π­ π€π°π­π­π¦π€π΅.'<br>
'ππ§π΅π¦π³ π΅π©πͺπ΄ π©π°π³π³πͺπ£π­π¦ π₯π³πͺπ·π¦, πΊπ°πΆ πΈπ’π―π΅ ππ°π₯ π΅π° π΅π°πΆπ€π© π?πΊ π©π¦π’π³π΅? π π¬π―π°πΈ πͺπ΅ πͺπ΄ π―π°π΅ πΊπ°πΆπ³ π§π’πΆπ­π΅..ππΆπ΅..<br>
ππ°π³π³πΊ, ππ°π₯'π΄ π©π’π―π₯ π―π¦π·π¦π³ π³π¦π’π€π© π?πΊ π€π©π¦π΄π΅,' I replied in Pidgin English and went on my way.<br>
πΆπΏββοΈπΆπΏββοΈπΆπΏββοΈ
<br><br> ";

include "blog-temp.php"; 

