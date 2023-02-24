let btn = document.querySelector(".price-button")
let text = document.querySelector(".price-text")
let input = document.querySelector(".input-container")

btn.onclick = function(){
    if (input.style.display === 'none') {
        input.style.display = 'block';
      } else{
        input.style.display = 'none';
      }
}

text.onclick = function(){
    if (input.style.display === 'none') {
        input.style.display = 'block';
      } else{
        input.style.display = 'none';
      }
}