const headerSmScreenLinks = document.querySelector(".header-sm-screen-links");

const navImg = document.querySelector(".sm-screen-logo + div img"); 

const toggle = function() {
	headerSmScreenLinks.classList.toggle("block");
}

navImg.addEventListener("click", toggle);

 //console.log(navImg);