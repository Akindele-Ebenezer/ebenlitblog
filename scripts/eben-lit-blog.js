const headerSmScreenLinks = document.querySelector(".header-sm-screen-links");

const navImg = document.querySelector(".header-sm-screen-top-nav div img:last-child"); 

const toggle = function() {
	headerSmScreenLinks.classList.toggle("block");
}

navImg.addEventListener("click", toggle);

 //console.log(navImg);
const dropDown = document.querySelector(".drop-down");
const dropDown2 = document.querySelector(".drop-down-2");

const contactDropArrow = document.querySelector("#header-2-wrapper li:nth-child(2)");
const contactDropArrow2 = document.querySelector("#header-2-wrapper li:nth-child(4)");

contactDropArrow.addEventListener("click", () => {
	dropDown.classList.toggle("block");
});
 
contactDropArrow2.addEventListener("click", () => {
	dropDown2.classList.toggle("block");
});


 
