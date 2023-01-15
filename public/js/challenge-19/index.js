    
    
    let switchButton = document.getElementById('switch');
    
    switchButton.addEventListener('change',function(e){
        if (switchButton.classList.contains('annually')) {
            switchButton.classList.remove('annually');
            switchButton.classList.add('monthly');
            
            precios = document.querySelectorAll('.precio');
            for (const precio of precios) {
                precio.innerHTML = precio.innerHTML.replace('9.','.')
            }
            
            
            
        } else{
            switchButton.classList.remove('monthly');
            switchButton.classList.add('annually');
            
            precios = document.querySelectorAll('.precio');
            for (const precio of precios) {
                precio.innerHTML = precio.innerHTML.replace('.','9.')
            }

        }
    });