window.addEventListener("DOMContentLoaded", function() {

    //PHONE MASK START
    function setCursorPosition(pos, elem) {
        elem.focus();
        if (elem.setSelectionRange) elem.setSelectionRange(pos, pos);
        else if (elem.createTextRange) {
            var range = elem.createTextRange();
            range.collapse(true);
            range.moveEnd("character", pos);
            range.moveStart("character", pos);
            range.select()
        }
    }

    function mask(event) {
        let matrix = "+7 (___) ___ ____",
            i = 0,
            def = matrix.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, "");
        if (def.length >= val.length) val = def;
        this.value = matrix.replace(/./g, function(a) {
            return /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? "" : a
        });
        if (event.type == "blur") {
            if (this.value.length == 2) this.value = ""
        } else setCursorPosition(this.value.length, this)
    }

    let inputs = document.querySelectorAll('input[type="tel"]');
    inputs.forEach(input => {
        input.addEventListener("input", mask, false);
        input.addEventListener("focus", mask, false);
        input.addEventListener("blur", mask, false);
    });
    //PHONE MASK EBD
});

// Get the modal
const modal = document.getElementById('modalCallback');
// Get the button that opens the modal
const btnCallbackOpen = document.getElementById('modalCallbackOpen');
// Get the <span> element that closes the modal
const btnCallbackClose = document.getElementById('modalCallbackClose');

let isResponseModalOpen = true;
// When the user clicks on the button, open the modal
btnCallbackOpen.addEventListener('click', () => {
    console.log('click');
    modal.style.display = 'block';
    isResponseModalOpen = true;
});
// When the user clicks on <span> (x), close the modal
btnCallbackClose.addEventListener('click', () => {
    isResponseModalOpen = true;
    modal.style.display = 'none';
});


const wpcf7Elms = document.querySelectorAll('.wpcf7');

const modalCallbackResponse = document.getElementById('modalCallbackResponse');

function validateForm(inputObj) {
    let value = inputObj.value;
    if (value === '') {
        inputObj.style.border = "2px solid #EB5757";
        inputObj.oninput = function () {
            inputObj.style.border = "2px solid #98A0AA";
        };
    }
}

wpcf7Elms.forEach(wpcf7Elm => {

    wpcf7Elm.addEventListener('wpcf7submit', function (event) {
        console.log('wpcf7submit');

        let x = setInterval(function () {
            let element = document.querySelector('.wpcf7-response-output');
            let msg = element.textContent || element.innerText;
            if (msg) {
                if (isResponseModalOpen) {
                    modal.style.display = 'none';
                    modalCallbackResponse.style.display = 'block';
                    document.getElementById('cfResponse').innerText = msg;
                    document.getElementById('modalCallbackResponseClose').addEventListener('click', () => {
                        modalCallbackResponse.style.display = 'none';
                    });
                }

                clearInterval(x);
            }
        }, 1000);

    }, false);

    wpcf7Elm.addEventListener('wpcf7invalid', function (event) {
        console.log('invalid');
        isResponseModalOpen = false;
        let iText = this.querySelector('input[type="text"]');
        let iTel = this.querySelector('input[type="tel"]');
        let iEmail = this.querySelector('input[type="email"]');
        validateForm(iText);
        validateForm(iTel);
        validateForm(iEmail);
    });

// When the user clicks anywhere outside of the modal, close it
    document.addEventListener('click', (ev) => {
        isResponseModalOpen = true;
        if (ev.target === modal) modal.style.display = 'none';
        if (ev.target === modalCallbackResponse) modalCallbackResponse.style.display = 'none';
    });
});


