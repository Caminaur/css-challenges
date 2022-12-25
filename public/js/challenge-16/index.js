

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

let emailBtn = document.querySelector('form.signin .email-row button.unit');
let loginBtn = document.querySelector('form.signin button.btnlogin');
let buttonsRow = document.querySelectorAll('form.signin div.buttons-row button.unit');

console.log(emailBtn,loginBtn,buttonsRow);