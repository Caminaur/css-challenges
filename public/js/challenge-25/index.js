
    const buttonOn = document.getElementById('on');
    const buttonOff = document.getElementById('off');
    const checkbox = document.getElementById('checkbox')

    buttonOff.addEventListener('click',function(){
        checkbox.checked=true;
    });
    buttonOn.addEventListener('click',function(){
        checkbox.checked=false;
    });