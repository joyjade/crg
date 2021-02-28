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

// ABOUT---------- //
const INFO = document.querySelector('.info');
const ABOUT_CONTENT = INFO.querySelector('.content');
let menu_items = document.querySelectorAll('.menu-item');
let menu_item; 
let height_gap = 29;
let sections = ABOUT_CONTENT.querySelectorAll('h5');
let scrollLock = false;

// ABOUT---- (e)
INFO.addEventListener('click', event => {
  menu_item = event.target.closest('.menu-item');
  if (!menu_item) return;

  menuHighlight(menu_item);
  matchScroll(menu_item.id.split('_')[1]);


});

ABOUT_CONTENT.addEventListener('scroll',  scrolling);
let lastKnownScrollPosition = 0;

// ABOUT---- (fxns)
function menuHighlight(item) {
  menu_items.forEach(item => item.classList.remove('active'));
  item.classList.add('active');
}

function matchScroll(id) {
  let match = document.getElementById(id);
  let scrollPosition = match.getBoundingClientRect().y - height_gap;

  ABOUT_CONTENT.scrollBy({
    top: scrollPosition,
    behavior: 'smooth'
  });
}

function scrolling() {
  var posObj = {};
  var count = 0;

  sections.forEach(section => {
    posObj[count] = section.getBoundingClientRect().y - height_gap;
    count++;
  })

  scrollMatch(posObj);
}

function scrollMatch(posObj) {
  let last_element;
  for (key in posObj) {
    let offset = posObj[key]; 
    if (offset <= 0) {
      last_element = sections[key];
    }
  }
  
  let reference_id = 'item_' + last_element.id;
  menu_item = document.getElementById(reference_id);
  console.log(reference_id, menu_item);

  menuHighlight(menu_item);
}