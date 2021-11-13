const headerSmScreenLinks = document.querySelector(".header-sm-screen-links");

const navImg = document.querySelector(".header-sm-screen-top-nav div img:last-child"); 

const toggle = function() {
	headerSmScreenLinks.classList.toggle("block");
}

navImg.addEventListener("click", toggle);

 //console.log(navImg);
