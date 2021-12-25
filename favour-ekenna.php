<?php
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = mysqli_real_escape_string($conn, $_POST["comment"]);
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO favour_ekenna_comments (first_name, last_name, message, date) VALUES ('$first_name', '$last_name', '$comment', now());";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM favour_ekenna_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$title = "Oil";
$date = "11/26/2021";
$author = "Favour Ekenna";
$content = " 

'𝘖𝘶𝘤𝘩!!'<br>
'𝘞𝘦𝘵𝘪𝘯 𝘣𝘦 𝘵𝘩𝘢𝘵.?'  He asked me without looking back.<br>
'𝘛𝘩𝘦𝘴𝘦 𝘱𝘰𝘵𝘩𝘰𝘭𝘦𝘴!'  I said with my eyes shut in pain, as I tried to endure the sharp pain on my waist.<br><br>
I looked ahead. I saw more potholes.<br>
More Potholes!!<br>
More glorious potholes!!!<br><br>
The almighty potholes that decorated the roads of Aba.! <br>
And this Driver isn't showing signs of slowing down.<br>
His tricycle is still on full speed, and I am the only one inside his Keke.<br>
'𝑆𝑖𝑟, 𝑂𝑔𝑎, 𝑝𝑙𝑒𝑎𝑠𝑒, 𝑝𝑙𝑒𝑎𝑠𝑒, 𝑏𝑖𝑘𝑜̣ 𝑧𝑖, 𝑠𝑙𝑜𝑤 𝑑𝑜𝑤𝑛. 𝐽𝑢𝑠𝑡 𝑎 𝑏𝑖𝑡, 𝑓𝑜𝑟 𝑡ℎ𝑒𝑠𝑒 𝑝𝑜𝑡ℎ𝑜𝑙𝑒𝑠.' <br>
'𝐼𝑓 𝐼 𝑠𝑙𝑜𝑤 𝑑𝑜𝑤𝑛, 𝑤𝑒 𝑛𝑜 𝑔𝑜 𝑒𝑠𝑐𝑎𝑝𝑒 𝑡ℎ𝑖𝑠 𝑔𝑜 𝑠𝑙𝑜𝑤. 𝑌𝑜𝑢 𝑠𝑒𝑒 𝑡ℎ𝑎𝑡 𝑡𝑎𝑛𝑘𝑒𝑟 𝑤𝑒𝑦 𝑓𝑎𝑙𝑙 𝑓𝑜𝑟 𝑓𝑟𝑜𝑛𝑡.? <br>
𝐸𝑛 𝑔𝑜 𝑐𝑎𝑢𝑠𝑒 𝑔𝑜-𝑠𝑙𝑜𝑤 𝑣𝑒𝑟𝑦 𝑠𝑜𝑜𝑛.'<br><br>
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
'𝘐𝘴 𝘵𝘩𝘢𝘵 𝘢 𝘣𝘰𝘮𝘣?'<br>
'𝘐𝘴 𝘵𝘩𝘪𝘴 𝘢 𝘵𝘦𝘳𝘳𝘰𝘳𝘪𝘴𝘵 𝘢𝘵𝘵𝘢𝘤𝘬.?'<br>
'𝘖𝘩 𝘮𝘺 𝘎𝘰𝘥!! 𝘈𝘳𝘦 𝘸𝘦 𝘣𝘦𝘪𝘯𝘨 𝘢𝘵𝘵𝘢𝘤𝘬𝘦𝘥.?'<br><br>
I had a thousand questions in my mind, as my body froze due to my panic and anxiety.
Just then, I began to feel hot. I looked out the window and my eyes met a terrific scene.
The blazing red fire rising, pushing the dense cloud of smoke, upwards as it rises.
The fire was so bright that it lit up the one-bedroom apartment of my brother, and the smoke was so dense, that it looked as though it was a solid, as though, a pin couldn't go through it.<br><br>
I immediately took my keys and my phone and instinctively ran out of the room, locking the doors behind me.<br><br>
'𝘑𝘦𝘴𝘶𝘴! <br>
𝘑𝘦𝘴𝘶𝘴!! <br>
𝘑𝘦𝘴𝘶𝘴 𝘊𝘩𝘳𝘪𝘴𝘵!!! <br>
𝘛𝘩𝘦 𝘱𝘪𝘱𝘦𝘭𝘪𝘯𝘦 𝘩𝘢𝘴 𝘦𝘹𝘱𝘭𝘰𝘥𝘦𝘥! <br>
𝘑𝘦𝘴𝘶𝘴!'  The neighbor ran out of her room.<br>
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
'𝘞𝘩𝘺 𝘸𝘪𝘭𝘭 𝘵𝘩𝘦𝘪𝘳 𝘩𝘦𝘢𝘥 𝘰𝘧 𝘥𝘦𝘱𝘢𝘳𝘵𝘮𝘦𝘯𝘵 𝘨𝘪𝘷𝘦 𝘩𝘪𝘮 𝘮𝘰𝘯𝘦𝘺 𝘵𝘰 𝘣𝘶𝘺 𝘳𝘶𝘣𝘣𝘦𝘳 𝘤𝘰𝘯𝘵𝘢𝘪𝘯𝘦𝘳𝘴 𝘧𝘰𝘳 𝘵𝘩𝘦𝘪𝘳 𝘊𝘩𝘦𝘮𝘪𝘤𝘢𝘭𝘴.?'<br>
'𝘕𝘰, 𝘯𝘰, 𝘯𝘰, 𝘯𝘰, 𝘯𝘰.'.  I said out of frustration and suspicion. <br>
'𝘓𝘦𝘵 𝘪𝘵 𝘯𝘰𝘵 𝘣𝘦, 𝘭𝘦𝘵 𝘪𝘵 𝘯𝘰𝘵 𝘣𝘦.' The tears were forming in my eyes as I tried to unlock my phone.<br>
After some attempts, I successfully unlocked my phone. I went straight to my contacts, and my terrified memory couldn't remember the name I saved his number with.  <br>
'𝘈𝘳𝘨𝘩𝘩𝘩𝘩𝘩!!!'  One of the victims of the fire screamed as he was been poured water by some people who had come out to help.<br><br>
My focus went back to my phone as I tried to remember his contact. <br>
Just then, <br>
My phone rang, <br>
'𝐁𝐫𝐨 𝐒𝐭𝐚𝐧 𝐋𝐞𝐞.'<br>
I picked almost instantly, <br>
'𝘏𝘦𝘭𝘭𝘰?' <br>
'𝘏𝘦𝘭𝘭𝘰, 𝘖𝘬𝘸𝘺?'<br>
'𝘠𝘦𝘴, 𝘞𝘩𝘦𝘳𝘦 𝘢𝘳𝘦 𝘺𝘰𝘶.?'<br>
'𝘐 𝘢𝘮 𝘪𝘯 𝘵𝘩𝘦 𝘧𝘢𝘤𝘵𝘰𝘳𝘺, 𝘢𝘵 𝘸𝘰𝘳𝘬. <br>
𝘐 𝘩𝘰𝘱𝘦 𝘺𝘰𝘶 𝘢𝘳𝘦 𝘴𝘢𝘧𝘦.?'<br>
'𝘠𝘦𝘴, 𝘐 𝘢𝘮.<br>
𝘐 𝘸𝘢𝘴 𝘦𝘷𝘦𝘯 𝘵𝘳𝘺𝘪𝘯𝘨 𝘵𝘰 𝘤𝘢𝘭𝘭 𝘺𝘰𝘶 𝘫𝘶𝘴𝘵 𝘯𝘰𝘸.'<br>
'𝘛𝘩𝘢𝘵 𝘦𝘹𝘱𝘭𝘰𝘴𝘪𝘰𝘯, 𝘪𝘵 𝘸𝘢𝘴 𝘵𝘩𝘦 𝘱𝘪𝘱𝘦𝘭𝘪𝘯𝘦 𝘵𝘩𝘢𝘵 𝘦𝘹𝘱𝘭𝘰𝘥𝘦𝘥. <br>
𝘛𝘩𝘢𝘯𝘬 𝘎𝘰𝘥 𝘐 𝘥𝘪𝘥𝘯'𝘵 𝘭𝘪𝘴𝘵𝘦𝘯 𝘵𝘰 𝘑𝘪𝘨𝘨𝘺.'<br>
'𝘑𝘪𝘨𝘨𝘺.? 𝘞𝘩𝘢𝘵 𝘥𝘪𝘥 𝘩𝘦 𝘴𝘢𝘺?'<br>
'𝘐 𝘸𝘪𝘭𝘭 𝘵𝘦𝘭𝘭 𝘺𝘰𝘶 𝘸𝘩𝘦𝘯 𝘐 𝘨𝘦𝘵 𝘩𝘰𝘮𝘦 𝘪𝘯 𝘵𝘩𝘦 𝘮𝘰𝘳𝘯𝘪𝘯𝘨.'...<br>
_____
' 𝘠𝘰𝘶 𝘯𝘰 𝘸𝘰𝘯 𝘤𝘰𝘮𝘦 𝘥𝘰𝘸𝘯 𝘢𝘨𝘢𝘪𝘯.?' The Keke Driver interrupted my flashback. <br>
'𝘌𝘩𝘯? 𝘖𝘬𝘢𝘺. <br>
𝘚𝘰𝘳𝘳𝘺. <br>
𝘏𝘰𝘸 𝘮𝘶𝘤𝘩 𝘪𝘴 𝘪𝘵.?'<br>
'𝘖𝘯𝘦 𝘏𝘶𝘯𝘥𝘳𝘦𝘥 𝘯𝘢𝘪𝘳𝘢.<br><br> 
𝘉𝘶𝘵 𝘪𝘧 𝘵𝘰 𝘴𝘢𝘺 𝘎𝘰𝘥 𝘵𝘰𝘶𝘤𝘩 𝘺𝘰𝘶𝘳 𝘩𝘦𝘢𝘳𝘵, 𝘪𝘧 𝘺𝘰𝘶 𝘨𝘪𝘷𝘦 𝘮𝘦  #300 𝘰𝘳 𝘢𝘣𝘰𝘷𝘦 𝘐 𝘨𝘰 𝘴𝘵𝘪𝘭𝘭 𝘤𝘰𝘭𝘭𝘦𝘤𝘵.'<br>
'𝘈𝘧𝘵𝘦𝘳 𝘵𝘩𝘪𝘴 𝘩𝘰𝘳𝘳𝘪𝘣𝘭𝘦 𝘥𝘳𝘪𝘷𝘦, 𝘺𝘰𝘶 𝘸𝘢𝘯𝘵 𝘎𝘰𝘥 𝘵𝘰 𝘵𝘰𝘶𝘤𝘩 𝘮𝘺 𝘩𝘦𝘢𝘳𝘵? 𝘐 𝘬𝘯𝘰𝘸 𝘪𝘵 𝘪𝘴 𝘯𝘰𝘵 𝘺𝘰𝘶𝘳 𝘧𝘢𝘶𝘭𝘵..𝘉𝘶𝘵..<br>
𝘚𝘰𝘳𝘳𝘺, 𝘎𝘰𝘥'𝘴 𝘩𝘢𝘯𝘥 𝘯𝘦𝘷𝘦𝘳 𝘳𝘦𝘢𝘤𝘩 𝘮𝘺 𝘤𝘩𝘦𝘴𝘵,' I replied in Pidgin English and went on my way.<br>
🚶🏿‍♂️🚶🏿‍♂️🚶🏿‍♂️
<br><br> ";

include "blog-temp.php"; 

