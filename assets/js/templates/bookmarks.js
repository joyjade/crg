document.addEventListener("DOMContentLoaded", function() { 
  imgHover()
});

function imgHover() {
	let imgs = document.querySelectorAll('.gallery img');
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