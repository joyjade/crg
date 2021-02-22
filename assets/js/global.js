document.addEventListener("DOMContentLoaded", function() { 
  toggleInfo();
  mobileNav();
});

function toggleInfo() {
	let info = document.querySelector('.info');
  let openbtn = document.getElementById('info');
  const mainPanel = document.querySelector('main');

	openbtn.onclick = function(e) {
    e.preventDefault;
    openbtn.classList.toggle('active');
    info.classList.toggle('slid-open');
    mainPanel.style.overflow = 'hidden';
	};

	let closebtn = document.getElementById('slide_close');
	closebtn.onclick = function(e) {
    e.preventDefault;
    openbtn.classList.remove('active');
    info.classList.remove('slid-open');
    mainPanel.style.overflow = 'auto';
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
		};
	})	
}