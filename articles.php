<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Writers Crib is a community where writers who are skilled in writing articles, interesting stories, poems, blogs etc. post their content to be viewed here on this website.">
	<meta name="keywords" content="poems, articles, stories, interesting stories, blog, writers, posts, fiction">
	<link rel="icon" href="images/company-logo.PNG">
	<link rel="stylesheet" href="styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@500&display=swap" rel="stylesheet">
	<style>
		#header-2-wrapper li:last-child { 
			background: var(--blue); 
		}
		
		#header-2-wrapper li:first-child a { 
			color: #fff; 
		}
	</style>
	<title>Articles</title>  
</head>

<body>
	<main>
		<?php include "header-sm-screen.php"; ?>
		<?php include "header.php"; ?>
		
		<article>
			<section>
				<div class="s-1"> 
					<input type="search" class="search" placeholder="Search this site...">
					<ul>
						<h1>Categories</h1>
						<li><a href="poems.php">Poems</a></li>
						<li>Articles</li>
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
							<input type="email" name="email" placeholder="Email Address"> 
							<br>
							<button type="submit" name="submit">Subscribe</button>
					</div>  
				</form>
			</section>
			<section id="main-section-2">
				<h1>Articles</h1> 
					
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
				<div class="ads">
					<a target="_blank" href="https://kol.jumia.com/api/click/banner/fb5361d9-79e5-4021-9c50-1c9832a40e8a/0c12b719-508a-47dc-9fc7-32721498ad1a"><img src="https://kol.jumia.com/banners/Up8gb9vboMlv6VI9HSorZxxcFd97CHtt5BKWOc3P.jpg" alt="Health and beauty category"/></a>
				</div>
					<!-- Some slide images here -->
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
