
	<style>
                .comment-section,
                .comment-section ~ p,
                h3 {
                        display: none;
                }

		#header-2-wrapper li:nth-child(3) { 
			background: var(--blue); 
		}
		
		#header-2-wrapper li:nth-child(3) a { 
			color: #fff; 
		}
		@media (min-width: 1883px) {
			section:nth-child(2) {
				margin-bottom: 27rem;	
			}
		}
	</style>
<?php 
$title = "ABOUT";
$date = date("l jS \of F Y"); 
$author = "Akindele Ebenezer";
$content = "Welcome to <strong>WRITERS Crib</strong>. This is a community where writers who are skilled in writing articles, interesting stories, poems, blogs etc. post their content to be viewed here on this website. <br><br>
If you're experienced in writing articles or blogs, you can <a href='contact.php' id='about-link'>send a direct message here</a>, with your content. Your blog will be uploaded instantly to this site. <br><br>
- For more information, <a href='tel:09052757805' id='about-link'>call us</a> or <a href='https://api.whatsapp.com/send?phone=2349052757805' id='about-link'>send a whatsapp message</a>.";

include "blog-temp.php";  


