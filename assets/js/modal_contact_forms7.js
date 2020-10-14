document.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed modal-cf7');


});

// Get the modal
const modal = document.getElementById('modalCallback');
// Get the button that opens the modal
const btnCallbackOpen = document.getElementById('modalCallbackOpen');
// Get the <span> element that closes the modal
const btnCallbackClose = document.getElementById('modalCallbackClose');
// When the user clicks on the button, open the modal
btnCallbackOpen.addEventListener('click', () => {
    console.log('click');
    modal.style.display = 'block';
});
// When the user clicks on <span> (x), close the modal
btnCallbackClose.addEventListener('click', () => {
    modal.style.display = 'none';
});


const wpcf7Elm = document.querySelector('.wpcf7');

const modalCallbackResponse = document.getElementById('modalCallbackResponse');

wpcf7Elm.addEventListener('wpcf7submit', function (event) {
    let x = setInterval(function () {
        let element = document.querySelector('.wpcf7-response-output');
        let msg = element.textContent || element.innerText;
        if (msg) {
            modal.style.display = 'none';
            modalCallbackResponse.style.display = 'block';
            document.getElementById('cfResponse').innerText = msg;
            document.getElementById('modalCallbackResponseClose').addEventListener('click', () => {
                modalCallbackResponse.style.display = 'none';
            });
            clearInterval(x);
        }
    }, 1000);

}, false);

// When the user clicks anywhere outside of the modal, close it
document.addEventListener('click', (ev) => {
    if (ev.target === modal) modal.style.display = 'none';
    if (ev.target === modalCallbackResponse) modalCallbackResponse.style.display = 'none';
});