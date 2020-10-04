document.addEventListener("DOMContentLoaded", function() { 
	toggleInfo();
});

function toggleInfo() {
	let info = document.querySelector('.info');

	let openbtn = document.getElementById('info');
	openbtn.onclick = function(e) {
		e.preventDefault
		info.classList.add('slid-open');
	};

	let closebtn = document.getElementById('slide_close');
	closebtn.onclick = function(e) {
		e.preventDefault;
		info.classList.remove('slid-open');
	};
}