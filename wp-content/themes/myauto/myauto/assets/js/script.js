let menuBtn = document.querySelector('.menu_btn');
let menu = document.querySelector('.menu_burger');

menuBtn.addEventListener('click', function(){
	menuBtn.classList.toggle('active');
	menu.classList.toggle('active');
})

