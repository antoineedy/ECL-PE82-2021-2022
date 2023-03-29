// apparation avec transition du popup options 

let box = document.getElementById('box');
let btn = document.querySelector('.bouton');

console.log(btn);

                
btn.addEventListener('click', function () {
                
    if (box.classList.contains('hidden')) {
        box.classList.remove('hidden');
        setTimeout(function () {
        box.classList.remove('visuallyhidden');
        }, 20);
    } else {
        box.classList.add('visuallyhidden');    
        box.addEventListener('transitionend', function(e) {
        box.classList.add('hidden');
        }, {
        capture: false,
        once: true,
        passive: false
        });
    }

}, false);

//Descendre à la fin de la page lorsque l'on appuie sur la flèche 

let arrow = document.getElementById('arrow');

arrow.addEventListener("click", function() {
    var i = 10;
    var int = setInterval(function() {
      window.scrollTo(0, i);
      i += 10;
      if (i >= 230) clearInterval(int);
    }, 20);
  });
  
// Barre de recherche
window.onload = function(){

    $.get("data_test_rue.json", function(data){
        console.log(data);
        });
    }

let searchinput = document.getElementById("barre");

searchinput.addEventListener('keyup', function(){
    let input = searchinput.value;
    
    let result=1;
});
