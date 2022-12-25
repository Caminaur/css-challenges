
    let signin = document.getElementById('signin-button');
    let signup = document.getElementById('signup-button');
    let signupAction = document.getElementById('signup-action');
    signup.addEventListener('click', function(){
        signupAction.setAttribute('class','signup-action state-2');
    });
    signin.addEventListener('click', function(){
        signupAction.setAttribute('class','signup-action state-1');
    });