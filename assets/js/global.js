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