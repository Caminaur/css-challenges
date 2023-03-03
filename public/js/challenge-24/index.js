
    const buttons = document.querySelectorAll('.accordion-item button');
    
    function toggleAccordion(){
        const itemToggle = this.getAttribute('class')
        for (const button of buttons) {
            button.setAttribute('class','inactive');
        }
        if(itemToggle=='inactive'){
            this.setAttribute('class','active');
        }
    }

    function toggleAccordionShort(){
        const itemToggle = this.getAttribute('class')
        buttons.forEach((button)=>button.setAttribute('class','inactive'));
        if(itemToggle=='inactive') this.setAttribute('class','active');
    }

    buttons.forEach((button)=> button.addEventListener('click',toggleAccordionShort));