<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = mysqli_real_escape_string($conn, $_POST["comment"]);
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO chator_3_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', now());";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM chator_3_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "Nobody told me";
$date = "December 01, 2021";
$author = "Chator Peace";
$content = "
'Â© Chator Peace.
<br>
Titled: Nobody told me.
<br><br>

I snuck out from the compound, glancing sideways to be sure nobody was in sight.
<br>
The moment I was out of sight, I whistled and someone threw me a black jacket which I wore with speed.
<br>
"You can come out now, chickenhearted baby", Lizzy mocked and I rolled my eyes, taking the cigarette from her.
<br>
'What's up?' I mumbled, catching the lighter.
<br>
'The Popular Boys are in town baby, and we are going to steal the show', she squeaked and I clamped her mouth.
<br>
'Shhh', I hushed, 'let's get out of here. Someone could be lurking behind'.
<br>
She looked around warily and nodded, leading the way while I tiptoed behind her. As soon as we reached her car, I released a breath I didn''t know I was holding.
<br><br>
And right now, I believe you should know my parents are strict disciplinarians. If that''s a word though. Or let me rephrase, dad is strict and mom is a disciplinarian. Simple.
<br><br>
And as the last and only daughter, I grew up that way. Sneaking to night parties, thanks to my love Lizzy, and giving the perfect lies a machine cannot detect.
<br>
'Get in the car baby, we'll soon be late', she screamed and I took a second look at her.
<br>
She was wearing a mini black leather skirt and white tank top with booty shoes. With a black mascara, you could call her queen of the night, except that's what I call her, so you shouldn''t.
<br><br>
And your humble girl, she''s wearing a strapless gown which stopped at her thighs and nude heels. I suck at makeup, so Lizzy would fix that just before we make our entrance.
<br>
I hadn''t closed the door before she zoomed off. Lizzy is such a crazy driver too.
<br><br>
I'm studying Business Administration and in my second year. I met Lizzy, or Elizabeth on my first day at lectures and we clicked immediately. My parents wanted me to school from home against my wish and my brothers, just say they''re never around.
<br>
Love? Trust? I don''t think that exists in my family because I grew up with rules which I abide by till tomorrow. And since tomorrow is Thursday, I'll wake up early and rush to school, or Lizzy''s house where we cuddle, and do some things before and after lectures. I don''t joke with studies.
<br><br>
Lizzy showed me what love, trust and freedom is. She taught me the art of lying and I''m almost as perfect as her. She doesn''t need it though, her mother only sends money and would be happy if she''s away. So, I believe her mother is very happy wherever she is.
<br>
Betray? Nay. I trust Lizzy so much and I know she''ll never betray me because she has everything, except she claims I''ve got the curves better than her. I don''t believe it though. I''m the show stealer, she''s the show stopper.
<br>
'And we are here baby. Come to mummy, let''s fix your make up', I obliged, leaning closer and we kissed. A lil bit of smooches and kisses makes Lizzy hyperactive.
<br><br>
I'm bisexual.
<br>
Which explains why my body tingles whenever I hear of threesome.
<br>
'And it's all done', she dropped the mascara and I looked at my face.
<br>
'Wow Lizzy, you're blessed. My dad won't recognize me. I'm jealous baby'.
<br>
'I'm more jealous. Let''s go in and stop then steal the show', she squeaked, unable to control her excitement.
<br>
The moment we stepped into the house, all eyes were on us and we spotted the Popular Boys. These are two handsome, dashing and beautiful boys. Call em Greek gods if you want to. They are half-caste too, Derek and Ethan.
<br>
Derek is the most handsome and his sea storm eyes seem to take Lizzy because she acts all fuzzy around him. I prefer Ethan though, he doesn''t fancy Lizzy and vice versa.
<br>
'Woah my chocolate, you look yummy', Derek called in his strong British accent and she blushed. 
<br>
'And you brought your baby', he turned to me and I muttered a flat 'hi'.
<br>
Ethan was talking with some guys so I just walked to the bar. I took a glass of champagne and turned to face Lizzy whose face was pale for a moment before getting all bright again. Should be her discussion with Derek.
<br>
The rest of the night went pretty well. Making out with Ethan and some random dude, not seeing Lizzy for an hour which I wasn''t bothered about because Derek was absent too. 
<br><br>
'Right now, I don''t think I can make it to lectures tomorrow. I'll come over to sleep', I yawned.
<br>
'Okay', Lizzy hummed and gave me a tablet. 'Swallow it', she ordered.
<br>
'Why?'
<br>
'So you don't get wasted, baby. Or do you want your parents opening your door to see this!'
<br>
I laughed and was about to swallow it when she stopped me.
<br>
'Wait love, let's have some fun first. The road isn't busy.'
<br>
And we spent the next thirty minutes pleasuring each other in our drunken state.
<br>
'That was awesome Lizzy, I'll certainly come by in the morning'.
<br>
'Expecting you dear', she mumbled and I swallowed the drug.
<br>
When I alighted, she blew me a kiss and I tiptoed back to my room stripping and having a cold shower immediately. The moment my body touched the bed, I slept off.
<br>
Only to be awakened by stomach aches. The only thing I could do was write about my last experience accompanied by Lizzy''s message.
<br><br>
'I'm sorry Becky, but you know how much I hate sharing my obsession. Derek loves you and I'll rather let you die the same way I k!lled the other girls than make him spend thirty minutes with you. I''ll miss you but I''ll warn you, in your next life, never be too trusting. It never pays. No one would know who''s responsible for your death because no one knows me as Lizzy. I wish you die a painless death but sadly, some wishes don''t come true'.
<br>
She k!lled me first. 
<br>
No
<br>
My parents k!lled me first because they only ordered me. They never told me.
<br>
The drugs and lumps of blood didn''t k!ll me, but my innocent ignorance did.
<br>
Nobody told me!
<br>
Not even my parents, who just lost their last child.
<br>
Nobody told me!
'
<br><br>
";

include "blog-temp.php"; 

