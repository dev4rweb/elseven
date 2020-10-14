document.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed header-search');


});

const headerSearch = document.getElementById('headerSearch');
let searchForm = document.getElementById('searchForm');
let iSearch = document.getElementById('iSearch');
const closeSearchForm = document.getElementById('closeSearchForm');
const large = 1920,
    desktop = 1680,
    laptop = 1440,
    tablet = 1200,
    phone = 768;

function getWidthSearch() {
    let width = 460 + 'px';

    if (screen.width > large) width = 500;
    if (screen.width <= desktop && screen.width > laptop) width = 1030 + 'px';
    if (screen.width <= laptop && screen.width > tablet) width = 800 + 'px';
    if (screen.width <= tablet && screen.width > phone) width = 430 + 'px';
    if (screen.width <= phone) width = 100 + '%';
    console.log('width ' + width);
    return width;
}

headerSearch.addEventListener("click", (ev) => {
    if (screen.width <= phone) {
        searchForm.style.display = 'block';
        iSearch.style.position = 'static';
    }
    searchForm.style.width = getWidthSearch();
});
closeSearchForm.addEventListener('click', (ev) => {
    if (screen.width <= phone) {
        iSearch.style.position = 'relative';
        searchForm.style.display = 'none';
    }
    searchForm.style.width = '0';
});