document.addEventListener("DOMContentLoaded", function() {
	let titles = document.querySelectorAll('.book-title');
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
			title.style.color = 'white';
			title.style.backgroundColor = '#D62CFF';
			
		};
		title.onmouseleave = function() {
			// hiddenimage.style.opacity = '0';
			title.style.backgroundColor = '';
			title.style.color = 'black';
		};
	})	

})