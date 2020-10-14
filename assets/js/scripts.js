document.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed main-script');
    const mainTag = document.getElementsByTagName('main')[0];
    mainTag.addEventListener('click', () => {
        closeNav();
    });
});

/*Header navigation start*/

/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("headerNav").style.width = "65%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("headerNav").style.width = "0%";
}


/*Header navigation end*/