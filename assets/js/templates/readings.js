const pastrdgs = document.querySelector('.past-readings');
console.log(pastrdgs);
const button  = document.querySelector('.load-more');
let page      = parseInt(pastrdgs.getAttribute('data-page'));

const fetchProjects = async () => {
  let url = `${window.location.href}.json/page:${page}`;
  console.log(url);
  try {
    const response       = await fetch(url);
    const { html, more } = await response.json();
    button.hidden        = !more;
    pastrdgs.innerHTML    += html;
    page++;
  } catch (error) {
    console.log('Fetch error: ', error);
  }
}

button.addEventListener('click', fetchProjects);