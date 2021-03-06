<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="images/company-logo.PNG"> 
	<link rel="stylesheet" href="styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@500&display=swap" rel="stylesheet">
	<style>
		#header-2-wrapper li:nth-child(4) { 
			background: var(--blue); 
			color: #fff;
		} 
	</style>
	<title>Unique Posts</title>  
</head>

<body>
	<main>
		<?php include "header-sm-screen.php"; ?>
		<?php include "header.php"; ?>
		
		<article>
			<section>
				<div class="s-1"> 
					<input type="text" placeholder="Search this site...">
					<ul>
						<h1>Categories</h1>
						<li><a href="poems.php">Poems</a></li>
						<li><a href="articles.php">Articles</a></li>
						<li><a href="interesting-stories.php">Interesting Stories</a></li>
						<li><a href="technology.php">Technology</a></li>			
					</ul>
				</div>
				<form action="subscribed.php" method="post">
					<div class="s-1">
						<div>
							<h1>Follow by Email</h1>
							<p>Get all latest content delivered straight to your inbox.</p>
							<br>
						</div> 
							<input type="email" name="email" placeholder="Email Address" required> 
							<br>
							<button type="submit" name="submit">Subscribe</button>
					</div>  
				</form>
			</section>
			<section id="main-section-2">
				<h1>Unique Posts</h1>
					<div> 
						<div class="popular-posts-wrapper">
							<div class="popular-posts-img" style="background: url(images/Antoniette.jpg);
																background-size: cover;
																background-position: center;
																width: 20rem;
																height: 15rem;">
								<img src="images/Antoniette.jpg">
							</div>
							<div class="popular-posts">
								<h2>EVERYTHING IS GOING TO BE OKAY</h2>
								<h4>November, 2021</h4>
								<h4>Antoniette Dy Tubale</h4>
								<p>What you are bearing<br>
								Right now is just only<br>
								A temporarily pain of life.</p>
								<p><a href="antoniette.php">Continue reading --></a></p>
							</div>
						</div>
						<div class="popular-posts-wrapper">
							<div class="popular-posts-img" style="background: url(images/sunita.jpg);
																background-size: cover;
																background-position: center;
																width: 20rem;
																height: 15rem;">
								<img src="images/sunita.jpg">
							</div>
							<div class="popular-posts">
								<h2>EXTRA MARITAL AFFAIR</h2>
								<h4>November, 2021</h4>
								<h4>Sunita Grover Raina</h4>
								<p>
								A matter to think about<br>
								With a cool mind<br>
								Why people get entangled in them<br>
								Surely not for fun
								</p>
								<p><a href="sunita.php">Continue reading --></a></p>
							</div>
						</div>
						<div class="popular-posts-wrapper">
							<div class="popular-posts-img" style="background: url(images/sohrab.jpg);
																background-size: cover;
																background-position: center;
																width: 20rem;
																height: 15rem;">
								<img src="images/sohrab.jpg">
							</div>
							<div class="popular-posts">
								<h2>Unknown</h2>
								<h4>November, 2021</h4>
								<h4>Sohrab Amaan</h4>
								<p>I swallowed the pride, the self <br>respect & much more worse my inner instinct of fighting back.<br>
								I drew a clear line today to which<br> I'm not gonna pass even if it gets<br> more worse.
								...</p>
								<p><a href="sohrab.php">Continue reading --></a></p>
							</div>
						</div>	
						<div class="popular-posts-wrapper">
							<div class="popular-posts-img" style="background: url(images/tina3.jpg);
																background-size: cover;
																background-position: center;
																width: 20rem;
																height: 15rem;">
								<img src="images/tina3.jpg">
							</div>
							<div class="popular-posts">
								<h2>MISERY</h2>
								<h4>November, 2021</h4>
								<h4>JBM</h4>
								<p>Let's return to our eternity, my love<br>
								And continue to the paradise of the first unity<br>
								The world of the first encounter<br>
								Where there is no separation...
								</p>
								<p><a href="tina-3.php">Continue reading --></a></p>
							</div>
						</div>	
						<div class="popular-posts-wrapper">
							<div class="popular-posts-img" style="background: url(images/chator3.jpg);
																background-size: contain;
																background-position: center;
																width: 20rem;
																height: 15rem;">
								<img src="images/chator3.jpg">
							</div>
							<div class="popular-posts">
								<h2>Nobody told me</h2>
								<h4>12/01/2021</h4>
								<h4>Chator Peace</h4>
								<p>  
								 I snuck out from the compound, glancing sideways to be sure nobody was in sight. 
								 The moment I was out of sight, I whistled and someone threw me a black jacket which I wore with speed. 
								 "You can come out now, chickenhearted baby", Lizzy mocked and I rolled my eyes, taking the cigarette from her. 
								 "What's up?" I mumbled, catching the lighter. 
								 ...
								<p>
								<a href="chator-3.php">Continue reading --></a></p>
							</div>
						</div>
						<div class="popular-posts-wrapper">
							<div class="popular-posts-img" style="background: url(images/saptarshi.jpg);
																background-size: cover;
																background-position: center;
																width: 20rem;
																height: 15rem;">
								<img src="images/saptarshi.jpg">
							</div>
							<div class="popular-posts">
								<h2>THIS IS HOW I FEEL</h2>
								<h4>November, 2021</h4>
								<h4>Saptarshi Chakraborty</h4>
								<p>The moments I feel,<br>
								Surrender is the best option.<br>
								Standing up against,<br>
								Already tagged a lot of confusion.
								...</p>
								<p><a href="saptarshi.php">Continue reading --></a></p>
							</div>
						</div> 	
						<div class="popular-posts-wrapper">
							<div class="popular-posts-img" style="background: url(images/happyman.jpg);
																background-size: cover;
																background-position: center;
																width: 20rem;
																height: 15rem;">
								<img src="images/happyman.jpg">
							</div>
							<div class="popular-posts">
								<h2>Pregnancy wahala</h2>
								<h4>11/05/2021</h4>
								<h4>Happyman Merciful Ennymoney</h4>
								<p>People on Mark's villa! Not those that will come here to diss me. I'm referring to those that supported me when I had a deadly war with my landlady and are still supporting me now. Am I not done for? Just two months pregnancy and all these is happening. I don't think I can take it anymore. I know some of my enemies will say I still have seven months to suffer but it is well. God is in control.</p>
								<p><a href="happyman.php">Continue reading --></a></p>
							</div>
						</div>
						<div class="popular-posts-wrapper">
							<div class="popular-posts-img" style="background: url(images/Chijioke2.jpg);
																background-size: cover;
																background-position: center;
																width: 20rem;
																height: 15rem;">
								<img src="images/Chijioke2.jpg">
							</div>
							<div class="popular-posts">
								<h2>I felt I had made the biggest mistake of my life</h2>
								<h4>11/04/2021</h4>
								<h4>Chijioke Otikpa</h4>
								<p>Tears rolled down my cheeks, I felt I had made the biggest mistake of my life.         -------(#The full story!) 
								I couldn't sleep that night, my pillow was soaked with warm tears
								I picked up my phone to call my friend but I could hardly hit a button, my hands were vibrating like tiger generator
								Alas! How could I?
								Me, Chijioke Otikpa..
								I had trekked all the way from Eke amobi to Nkwo the day before, just to buy her a gift that will make her happy.
								...</p>
								<p><a href="chijioke2.php">Continue reading --></a></p>
							</div>
						</div>	
						<div class="popular-posts-wrapper">
							<div class="popular-posts-img" style="background: url(images/mba.jpg);
																background-size: cover;
																background-position: center;
																width: 20rem;
																height: 15rem;">
								<img src="images/mba.jpg">
							</div>
							<div class="popular-posts">
								<h2>BEDROOM DANCE</h2>
								<h4>10/28/2021</h4>
								<h4>Mba Hillary</h4>
								<p>Dance can be used as a vehicle for expression. It can help tell a story, convey feelings and emotions, and connect with others and with ourselves.
								Body movement can be expressive and communicative. It can be used as a means of self-expression where words are not necessary ??? the body does all the talking!</p>
								<p><a href="mba.php">Continue reading --></a></p>
							</div>
						</div>	
						<div class="popular-posts-wrapper">
							<div class="popular-posts-img" style="background: url(images/chator.jpg);
																background-size: cover;
																background-position: center;
																width: 20rem;
																height: 15rem;">
								<img src="images/chator.jpg">
							</div>
							<div class="popular-posts">
								<h2> A dream</h2>
								<h4>10/25/2021</h4>
								<h4>Chator Peace</h4>
								<p>I had a dream
								Where life was beyond the realm
								Shared in sections and themes
								And every spirit had a team.

								There was neither poor nor rich
								You didn't have to switch...</p>
								<p><a href="chator.php">Continue reading --></a></p>
							</div>
						</div>	
						<div class="popular-posts-wrapper">
							<div class="popular-posts-img" style="background: url(images/koffi.jpg);
																background-size: cover;
																background-position: center;
																width: 20rem;
																height: 15rem;">
								<img src="images/koffi.jpg">
							</div>
							<div class="popular-posts">
								<h2>How to Nurture, Entertain, Educate Your Audience and Create The Right Customer Journey</h2>
								<h4>11/10/2021</h4>
								<h4>Koffi Akpavi</h4>
								<p>Yesterday a friend completely desperate, devastated poured his heart to me . He has noticed that some of his friends are always getting new customers, but as for him, he struggles everyday to get even one. He doesn't understand.
								.
								So what I told him has been summarized in this article. I wanted to share it with you. Maybe you may get some value too....</p>
								<p><a href="koffi.php">Continue reading --></a></p>
							</div>
						</div> 	
						<div class="popular-posts-wrapper">
							<div class="popular-posts-img" style="background: url(images/orji.jpg);
																background-size: cover;
																background-position: center;
																width: 20rem;
																height: 15rem;">
								<img src="images/orji.jpg">
							</div>
							<div class="popular-posts">
								<h2>It's almost time</h2>
								<h4>10/20/2021</h4>
								<h4>Orji Ifeanyi Michael</h4>
								<p>My elder brother announced and I almost peed my pants.
								"Not again! I can't keep doing this every night or else I'll go insane." I pleaded with him and he turned to me with a stern expression.

								"You have to stay strong or do you want mom to die?" He asked me and I shook my head. Of course I didn't want my mom to die, but we have been doing this for three days straight every night at 7pm....</p>
								<p><a href="orji.php">Continue reading --></a></p>
							</div>
						</div>	
						<div class="popular-posts-wrapper">
							<div class="popular-posts-img" style="background: url(images/chator2.jpg);
																background-size: cover;
																background-position: center;
																width: 20rem;
																height: 15rem;">
								<img src="images/chator2.jpg">
							</div>
							<div class="popular-posts">
								<h2>Have you ever been bullied?</h2>
								<h4>10/12/2021</h4>
								<h4>Chator Peace</h4>
								<p>Oh sorry, body shamed rather. Well, if no, then pay attention.
								If yes, then you know the pains, torments and emotional torture.

								Those pains don't compare to the pains of betrayal. Being struck by that person you vouch could stand by you and not wash your dirty linens in public. By that person you trust with your life because you think you know them...</p>
								<p><a href="chator-2.php">Continue reading --></a></p>
							</div>
						</div>				
					</div> 
				
			</section>
			<section>
					<div class="logo">
						<img src="images/company-logo.PNG">
						<p>WRITERS <br> Crib</p>
					</div>
				<div class="s-3">
				<h2>POPULAR POSTS</h2>
					<div>
						<div class="popular-posts-wrapper">
							<div class="popular-posts-img" style="background: url(images/roi.jpg);
																background-size: cover;
																background-position: center;
																width: 20rem;
																height: 15rem;"> 
							</div>
							<div class="popular-posts">
								<h2>Miss Angela just got verified on Facebook with a blue tick</h2>
								<h4>09/15/2021</h4>
								<h4>Roi Peejay</h4>
								<p>Miss Angela just got verified on Facebook with a blue tick
								Miss Stella just got a new car
								Mrs Davids just got 80,000 followers on her Facebook account

								Ahhh, God am I a spoon? Linda asked....
									</p>
								<p><a href="roi.php">Continue reading --></a></p>
							</div>
						</div>
						<div class="popular-posts-wrapper">
							<div class="popular-posts-img" style="background: url(images/Chijioke.jpg);
																background-size: cover;
																background-position: center;
																width: 20rem;
																height: 15rem;"> 
							</div>
							<div class="popular-posts">
								<h2>MY SON MUST DO MEDICINE</h2>
								<h4>7/3/2021</h4>
								<h4>Chijioke Otikpa</h4>
								<p>Let me tell you a short story. Vitalis was good in science from secondary school but he had always admired and loved teaching all through his life. Unlike other children his age, he loved watching documentaries of great teachers and even taking notes while watching, he had this dream of building his own school one day. But! His dad said he must study medicine.. His mum forced him to apply for medicine.. His dad once caught him watching a documentary video he bought from his savings, but daddy confiscated it and broke it into pieces. Prak! Prak! Prak!</p>
								<p><a href="chijioke.php">Continue reading --></a></p>
							</div>
						</div>
						<div class="popular-posts-wrapper">
							<div class="popular-posts-img" style="background: url(images/samuel.jpg);
																background-size: cover;
																background-position: center;
																width: 20rem;
																height: 15rem;"> 
							</div>
							<div class="popular-posts">
								<h2>THE GATE KEEPER</h2>
								<h4>11/3/2021</h4>
								<h4>Samuel Jeremiah</h4>
								<p>Raising incense with his words,
								His tongues becoming a cloven fire,
								Communing with the consuming fire,
								His eyes a viscuos fiery blazing furnace,
								His face fierce and scary,
								The flames of fire evolving out of them,
								The watchman ready to die at his post.
								With the blood of others he was designed,
								Decorated with their bloodstain.</p>
								<p><a href="samuel-j.php">Continue reading --></a></p>
							</div>
						</div>
						<div class="popular-posts-wrapper">
							<div class="popular-posts-img" style="background: url(images/happyman.jpg);
																background-size: cover;
																background-position: center;
																width: 20rem;
																height: 15rem;"> 
							</div>
							<div class="popular-posts">
								<h2>PREGNANCY WAHALA</h2>
								<h4>11/05/2021</h4>
								<h4>Happyman Merciful Ennymoney</h4>
								<p>People on Mark's villa! Not those that will come here to diss me. I'm referring to those that supported me when I had a deadly war with my landlady and are still supporting me now. Am I not done for? Just two months pregnancy and all these is happening. I don't think I can take it anymore. I know some of my enemies will say I still have seven months to suffer but it is well. God is in control....</p>
								<p><a href="happyman.php">Continue reading --></a></p>
							</div>
						</div>			
					</div> 
				</div>
				
			</section>
		</article> 
		
		<?php include "footer.php"; ?>
	</main>
</body>

</html>
