document.addEventListener("DOMContentLoaded", function() { 
  toggleInfo();
  mobileNav();
});

function toggleInfo() {
	let info = document.querySelector('.info');

	let openbtn = document.getElementById('info');
	openbtn.onclick = function(e) {
    e.preventDefault;
    openbtn.classList.toggle('active');
		info.classList.toggle('slid-open');
	};

	let closebtn = document.getElementById('slide_close');
	closebtn.onclick = function(e) {
    e.preventDefault;
    openbtn.classList.remove('active');
		info.classList.remove('slid-open');
	};
}

function mobileNav() {
  let mnav = document.querySelector('.m-nav');
  let navarrow = document.getElementById('nav_arrow');
  navarrow.onclick = function(e) {
    e.preventDefault;
    mnav.classList.toggle('show')
  }
}

function hoverReveal(selector) {
	let titles = document.querySelectorAll(selector);
	let hiddenimage = document.querySelector('.thumb-image.hidden');
	let img = hiddenimage.querySelector('img');
	let noimage = img.src;

	titles.forEach(title => {
		title.onmouseover = function() {
			if (title.dataset.src) {
				img.src = title.dataset.src;
			} 
			else {
				img.src = noimage;
			}

			hiddenimage.style.opacity = '1';
			// title.style.color = 'white';
			// title.style.backgroundColor = '#D62CFF';
			
		};
		// title.onmouseleave = function() {
		// 	title.style.backgroundColor = '';
		// 	title.style.color = 'black';
		// };
	})	
}