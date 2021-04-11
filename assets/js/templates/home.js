document.addEventListener("DOMContentLoaded", function() { 
	hoverReveal('.book-title');
});

function tooltip() {
  let tooltip = document.querySelector('.tooltip');
  let text = document.querySelector('.tooltip-text');

  document.addEventListener('click', event => {
    console.log(event.target)
    if (event.target ==! tooltip) {
      text.classList.remove('show');
    } else {
      text.classList.toggle('show');
    }
  }) 
}