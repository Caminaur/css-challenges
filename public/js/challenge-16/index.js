
let inputs = document.querySelectorAll('.inputs');
let emailInput = document.getElementById('email-2');


for (const input of inputs) {
    
    input.addEventListener('focus',function(){
        input.classList.add('selected')
        input.classList.remove('unselected')
    });
    input.addEventListener('focusout',function(){
        if (!input.value) {
            input.classList.remove('selected')
            input.classList.add('unselected')
        }
    });
}