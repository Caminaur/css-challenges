

let inputs = document.querySelectorAll('.inputs');
let emailInput = document.getElementById('email-2');
for (const input of inputs) {
    
    input.addEventListener('focus',function(){
        input.classList.add('selected')
        input.classList.remove('unselected')
    });
    input.addEventListener('focusout',function(){
        input.classList.remove('selected')
        input.classList.add('unselected')
    });
}

emailInput.addEventListener('focus',function(){
    emailInput.classList.add('selected')
    emailInput.classList.remove('unselected')
});
emailInput.addEventListener('focusout',function(){
    emailInput.classList.remove('selected')
    emailInput.classList.add('unselected')
});