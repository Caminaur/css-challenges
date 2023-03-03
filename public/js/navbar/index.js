document.addEventListener('click', (e)=>{
    const isDropdownButton = e.target.matches("[data-dropdown-button]");

    if(!isDropdownButton && e.target.closest("[data-dropdown]") != null) return;

    let currentDropdown;
    if(isDropdownButton){
        currentDropdown = e.target.closest("[data-dropdown]");
        currentDropdown.classList.toggle('active');
    }

    console.log(e.target.closest("[data-dropdown]"));
    document.querySelectorAll("[data-dropdown].active").forEach(dropdown=>{
        if (dropdown === currentDropdown) return;
        dropdown.classList.remove("active");
    });
});