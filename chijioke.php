<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = mysqli_real_escape_string($conn, $_POST["comment"]);
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO chijioke_otikpa_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', now());";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM chijioke_otikpa_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$title = "MY SON MUST DO MEDICINE";
$date = "7/3/2021";
$author = "Chijioke Otikpa";
$content = "Let me tell you a short story.
Vitalis was good in science from secondary school but he had always admired and loved teaching all through his life.
Unlike other children his age, he loved watching documentaries of great teachers and even taking notes while watching, he had this dream of building his own school one day.
But! <br><br>
His dad said he must study medicine.. 
His mum forced him to apply for medicine..
His dad once caught him watching a documentary video he bought from his savings, but daddy confiscated it and broke it into pieces.
Prak! Prak! Prak! <br><br>
With every crack of the plate, he felt his heart break many times..
That was his all time favourite teacher model – Marva Collins’ documentary that his dad just broke...
His dad went further to go buy him a lot of medical books and textbooks on the major courses he’ll need for first and premed years in the university. <br><br>
He was forcefully enrolled into a private home lesson for the science courses he’ll need for #JAMB.
Well, the time came and...  <br><br>
He wrote JAMB and passed and got admitted.
He never knew why the heck he was going to do that in the university..
Follow me... <br><br>
He found medical school frustrating, not because he wasn’t smart enough but because he couldn’t figure out what in the coconuts he was there for. <br><br>
He struggled to even pass his quizzes, he suffered severe depression with every result released.
Things got so bad his friends lured him into doing drugs, he smoked weed, tried crack and did all forms of crazy stuff to stay awake and sane so as to get rid of the frustration. 
One day he stumbled in one weed that made him sleep for 2 days and almost missed his 2nd anatomy quiz... <br><br>
That was when he vowed never to go back to those friends again,
Unknown to him, he had gotten addicted.
He secretly split his pocket money and sought the help of Synapse Services Ltd, a professional metal health counselling and rehabilitation firm. <br><br>
There he met an addiction a drug abuse therapist who really helped his condition and helped him heal.
All through his days in the university, he felt like a fish competing with monkeys in a tree climbing challenge.. 
It was a nightmare galore for him but he managed to pull through regardless.. <br><br>
“Mama I made it, MBBS bagged!”  but deep down he still wasn’t satisfied, he couldn’t get it together, he was so anxious about the future and pretty much confused.
He still hadn’t understood why he jumped on the journey to becoming a medical doctor. <br><br>
He was again persuaded to do his housemanship, residency and specialty programs and boom he’s finally a doctor...
From hating the long ward rounds, to his ardent distaste for the odour of the hospital to getting nauseous at the sight of the smallest drop of blood to the chronic absence of passion for the profession ... He knew it just wasn’t for him... <br><br>
To bottle up the matter, 
He found it hard to get a job but he finally landed one. He was being underpaid (oops but mummy said I can never be hungry as a doctor).
He was losing weight.
Low key he had always earnestly desired to become a teacher, he felt everything calling him into the teaching career but mummy and daddy said NO! <br><br>
“Nwa m ga-eme Medicine” (my son must do medicine)..
He was unhappy because the head in his workplace was treating all the staff including himself like a piece of shit.
He cried often, like a baby... <br><br>
He cried himself to sleep, his pillows soaked with tears.
He couldn’t even keep his relationship with Chinaza, his new found love who considered him to be weird cos apart from his mental instability, he couldn’t afford her luxury...
She wanted all the expensive stuff in the world, she almost killed him with billings so he ran for dear life... <br><br>
Chinaza why? Well, that’s a story for another day..
Doctors went on strike after a protest they were forced to join following the incidence of the FG insisting that health workers salaries will be slashed by half so as to get some money to pay back the loan Nigeria borrowed from China. ‘Wahala Pro max!’ 
His depression got worse, he contemplated suicide many times.
He tried looking for a job in a private hospital but it was not as easy as he thought..  <br><br>
He wrote 60 applications but nothing happened.
Recruiters ghosted him... 
He was stuck right there for 4 bad years.
He wasn’t fulfilled in his career and he was even broke.
There was this particular day he had trekked all the way home from the hospital after a hard day’s work, under the hot sun in the streets of Lagos. <br><br>
He came back home famished and sweating. 
NEPA (now EEDC) had come to cut the power supply in his area and he didn’t have money to subscribe for prepaid meter..
That night, he pulled his drawer open, brought out garri and water to do the normal night routine...  <br><br>
It occurred to him, how can a certified doctor be soaking garri? Ah!  “what is shawarma and burger that I can’t afford? ” he muttered
Then he remembered his salary and all the debts he had to settle and he calmed down and prayed for peace to reign in his heart.
Looking by corner of his room and saw his flat file, he dipped his hand inside and pulled out his degree certificate. After looking at it for a while and even remembering how he packed some awards during their induction ceremony..  <br><br>
“Ah! Life is beans!” he exclaimed, 
“Mom and dad were wrong after all, they put me in this mess...”
He subconsciously started fanning himself with the certificate. 
That was his situation..
Sad right? <br><br>
Many persons are like Vitalis...
Taking decisions based on maybes and chances or “mummy said I should put Medicine”.. “daddy said I must do Pharmacy”
Which is actually very dangerous.
Choosing a career or even a course of study based on ‘mummy told me’ is a disaster waiting to happen.
This is why many graduates are unemployed, frustrated and confused
Most are underpaid and abused.
Yet they ignore the very solution... <br><br>
Let’s see what happened to Vitalis later on..
Vitalis stumbled on my post on Facebook talking about career clarity and options.. <br><br>
He quickly booked a clarity session with me and after the session his mindset toward career path finding got renovated, he was pumped up to make a new move..
He purchased my book – YOUR CAREER CLARITY COMPANION which he read and came back screaming! “This is all I had been waiting someone to show me all my life”
Coach CJ, where have you been all my life? He said and dropped some teary emojis.. I felt it..  <br><br>
That was about the 20th time I was hearing that statement from different people I met online
He checked my profile and saw that I was hosting a Train The Trainer program for teachers and those interested in getting started in the teaching career, he quickly made enquiries and paid to join..
After the 4th module of the training, he seemed to had figured it out, he hit his EUREKA! Moment
He launched his own training that attracted over 200 persons.
After the training, the feedback his students gave him made him shed real tears. <br><br>
He sent the screenshots to me with the following words attached
“Thank you Coach CJ, now I feel like I’m living, you must be an angel sent for me”
***Where’s Vitalis now?  <br><br>
He’s now a very successful teacher, living out his dreams, making global impact online and offline and so much money as well. 
He saved up some money and went ahead to do a couple of professional trainings and affiliations with prestigious institutions like University of Toronto, Canada, Yale University and University of Colorado. <br><br>
Let me give you a small gist... 
His passion for teaching interacted with the clarity I offered him and that fuelled his mission and led to the establishment of the first Individualism based school in Africa.
His work grabbed the attention of the media and he was awarded a grant worth millions of dollars and he now travels to different parts of the world doing what he loves- TEACHING and SPEAKING. 
Today, he teaches and trains young people about purpose, skills and he especially advocates against making the wrong career choices...
Who would have believed it? <br><br>
***What happened to Vitalis?
He got CLARITY and he eventually chose the career path that was made for him then with the right guidance he made a sustainable career plan and boom! Eureka!.
Now to make a sustainable career plan, you must start with the fundamentals.  <br><br>
You must choose a career path that is suitable for YOU!
Pay close attention because you will hardly ever learn this in school. By fundamentals I mean, an intense self or needs analysis.
Start by looking inward and asking yourself one great question, find out in my book - YOUR CAREER CLARITY COMPANION.
Meanwhile, did you enjoy or learn anything from this story? Please share in the comments.
© Culled from YOUR CAREER CLARITY COMPANION written by Chijioke Otikpa.  <br><br>
Img credit: dreamstime <br><br>
Ps: This story is mainly fiction and I avoided using any real character. <br><br>
Please, any coincidence in the names used was purely unintentional.
Make one Chinaza no come break my head abeg, I'm last born in my house.  <br><br>
My major aim for writing this is to get it right inside the eyes of every African parent.
Your Children deserve their own futures. You can't captain your life and force your captainship on their own lives too.
Instead of forcing your choices on them, teach the about career choices on time and guide them to the best way to approach those dreams calling them from within.
This story took me a lot of time to write and I thought of sharing to this community, please encourage me by liking and commenting if you love it.  <br><br>
Let's change the world together✅";

include "blog-temp.php"; 

