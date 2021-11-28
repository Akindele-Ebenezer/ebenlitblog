<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-213761854-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-213761854-1');
</script>
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4278961694460844"
     crossorigin="anonymous"></script>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Writers Crib is a community where writers who are skilled in writing articles, interesting stories, poems, blogs etc. post their content to be viewed here on this website.">
	<meta name="keywords" content="poems, articles, stories, interesting stories, blog, writers, posts, fiction">
	<link rel="icon" href="images/company-logo.PNG">
	<link rel="stylesheet" href="styles.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@500&display=swap" rel="stylesheet">
	<title><?= $author . "'s POST"; ?></title> 
</head>

<body>
	<main>
		<?php include "header-sm-screen.php"; ?>
	
		<?php include "header.php"; ?>
		
		<article>
			<section>
				<div class="s-1"> 
					<ul>
						<h2>Categories</h2>
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
			
			<section class="section-2-post section-2-post-reading"> 
				<h1><?= $title; ?></h1>
				<p><?= $date; ?></p>
				<p>Posted By : <?= $author; ?></p>
				<div>
					<?= $content; ?>
				</div>
				<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
					<div class="comment-section">
						<br><hr>
						<p>Leave a comment</p>
						<input type="text" name="first_name" placeholder="First Name" required> <br>
						<input type="text" name="last_name" placeholder="Last Name" required> 
						<input type="hidden" name="date" required> <br>
						<textarea name="comment" placeholder="Write your comment..." required></textarea>
						<br>
						<button type="submit" name="submit">Comment</button>
					</div>
					
					<?php  
					$total = 0;
					foreach($result as $number_of_comments) {
						$total++;
					} 
					switch($total) {
						case 0:
						echo "<p>No Comment</p> <hr>";
						break;
						case 1:
						echo "<p>1 Comment</p> <hr>";
						break;
						default:
						echo "<p>$total Comments</p> <hr>";
						break;
					}
						
						foreach($result as $comment) : ?>
							 
									
									<div class='comments'>
										<div>
											<h3><?= $comment["first_name"][0] . $comment["last_name"][0]; ?></h3>										
										</div>
										<div>
											<h2><?= $comment["first_name"] . " " . $comment["last_name"]; ?></h2>
											<p><?= $comment["date"]; ?></p>
											<p><?= $comment["comment"]; ?></p>
										</div>
									</div>
									  
					<?php   
						endforeach;
					?>
					 
				</form>
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
