
    let button = document.getElementById('button');
    let circle = document.getElementById('circle');
    let body = document.querySelector('.body');

    circle.addEventListener('click', function(){
        
        if (button.getAttribute('class')=='button state-1' || button.getAttribute('class')=='button') {
            button.classList.remove('state-1');
            button.classList.add('state-2');
            circle.classList.remove('state-1');
            circle.classList.add('state-2');
            body.classList.remove('inactive');
            body.classList.add('active');
        } else{
            button.classList.remove('state-2');
            circle.classList.remove('state-2');
            button.classList.add('state-1');
            circle.classList.add('state-1');
            body.classList.remove('active');
            body.classList.add('inactive');
        }
    });