// To print data on console given by user in add product form

var btn = document.getElementById("submit");
btn.addEventListener('click', function (event) {

    event.preventDefault();

    function consoleData() {
        let data = document.querySelectorAll('input');
        data.forEach(function (element) {
            if (element.type == "checkbox" || element.type == "radio") {
                if (element.checked == true) {
                    console.log(element.id + " : " + element.value);
                }
            }
            else {
                console.log(element.id + ":" + element.value);
            }
        })
        function consoleDropdowns() {
            let dropdowns = document.querySelectorAll('select');
            dropdowns.forEach(function (element) {
                console.log(element.id + " : " + element.value);
            })
        }
        consoleDropdowns();
    }
    consoleData();
});

// End of To print data on console given by user in add product form



// To validate the form fields with bootstrap validation

function valid() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const form = document.querySelector('.needs-validation')

    // Loop over them and prevent submission
    form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        }

        form.classList.add('was-validated')
    }, false)
}

// End of To validate the form fields with bootstrap validation




