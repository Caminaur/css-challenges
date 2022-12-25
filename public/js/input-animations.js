
document.addEventListener("DOMContentLoaded", function() {
    var elements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("This field cannot be left blank");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
})

let inputs = document.querySelectorAll(".caged");
for (let divInput of inputs) {

    input = divInput.childNodes[1];
    // // We check for autofill
    // // We check for autofill    

    // when hover the div
    divInput.addEventListener('mouseover',function(){
        divInput.setAttribute('class','caged open-input')
    });
    divInput.addEventListener('mouseout',function(){
        parentClass = divInput.parentElement.parentElement.getAttribute('class');
        // verificamos el status if 2|3 keep-open else close
        if('row mb-3 status-3'== parentClass || 'row mb-3 status-2'== parentClass || divInput.hasFocus) return;
        divInput.setAttribute('class','caged closed-input')
    });
    // when hover the div

    // When information is added to the input
    input.addEventListener('change',function(e){
        statusDiv = divInput.parentElement.parentElement;
        input = divInput.childNodes[1];
        if (input.value=="") {
            // if no content status-1
            statusDiv.setAttribute('class','row mb-3 status-1');
            divInput.setAttribute('class','caged closed-input');
        } else{
            // if content status-3
            divInput.setAttribute('class','caged open-input');
            statusDiv.setAttribute('class','row mb-3 status-3');
        }
    });
    input.addEventListener('focus', function(e){
        statusDiv = divInput.parentElement.parentElement;
        statusDiv.setAttribute('class','row mb-3 status-2');
        divInput.setAttribute('class','caged open-input')
    });
    input.addEventListener('focusout', function(e){
        statusDiv = divInput.parentElement.parentElement;
        input = divInput.childNodes[1];
        if (input.value=="") {
            // if no content status-1
            statusDiv.setAttribute('class','row mb-3 status-1');
            divInput.setAttribute('class','caged closed-input');
        } else{
            // if content status-3
            divInput.setAttribute('class','caged open-input');
            statusDiv.setAttribute('class','row mb-3 status-3');
        }
    });
    // When information is added to the input
}