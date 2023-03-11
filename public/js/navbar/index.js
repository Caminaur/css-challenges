document.addEventListener('click', (e)=>{
    const isDropdownButton = e.target.matches("[data-dropdown-button]");

    if(!isDropdownButton && e.target.closest("[data-dropdown]") != null) return;

    let currentDropdown;
    if(isDropdownButton){
        currentDropdown = e.target.closest("[data-dropdown]");
        currentDropdown.classList.toggle('active');
    }
    document.querySelectorAll("[data-dropdown].active").forEach(dropdown=>{
        if (dropdown === currentDropdown) return;
        dropdown.classList.remove("active");
    });
});

const toggleButton = document.getElementById('toggleButton');

toggleButton.addEventListener('click',()=>{
    if (toggleButton.matches("[data-toggle-button=false]")) {
        toggleButton.setAttribute('data-toggle-button',true);
    } else{
        toggleButton.setAttribute('data-toggle-button',false);
    }
    console.log(toggleButton);
});   
document.getElementById('logout-button').addEventListener('click',function(e){
    e.preventDefault();
    document.getElementById('logout-form').submit();
});
                                                  