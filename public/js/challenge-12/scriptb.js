var search = document.getElementById('search');
var button = document.getElementById('button');
var input = document.getElementById('input');

function loading() {
  search.classList.add('loading');

  setTimeout(function () {
    search.classList.remove('loading');
  }, 1500);
}

button.addEventListener('click', loading);

input.addEventListener('keypress', function(eventKey) {
    if (eventKey.key === 'Enter') loading();
});
