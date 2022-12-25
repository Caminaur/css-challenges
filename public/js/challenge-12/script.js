let search = document.querySelector('.search')
let input = document.getElementById('input');
let lupaButton = document.getElementById('search-lupa');

function loading() {
    search.setAttribute('class', 'search loading');
    
    setTimeout(() => {
        search.setAttribute("class", "search");
    }, 1500);
}

lupaButton.addEventListener('click', loading);

input.addEventListener('keypress', function(eventKey) {
    if (eventKey.key === 'Enter') loading();
});