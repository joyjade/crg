const pastrdgs = document.querySelector('.past-readings');
const button  = document.querySelector('.load-more');
let page      = parseInt(pastrdgs.getAttribute('data-page'));

const fetchProjects = async () => {
  // url to the next page (using pagination)
  let url = `${window.location.href}.json/page:${page}`;
  try {
    const response       = await fetch(url); // hits the url and grabs the contents
    const { html, more } = await response.json(); // initializes the JSON keys into the variables
    button.hidden        = !more; // hides the button if there is no more
    pastrdgs.innerHTML    += html; // adds the html to the current html
    page++; // then increases the page number
  } catch (error) {
    console.log('Fetch error: ', error);
  }
}

button.addEventListener('click', fetchProjects);