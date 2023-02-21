const button = document.getElementsByClassName('price-button')

console.log(button.style)

button.addEventListener('mouseenter', function () {
	button.style.backgroundColor = '#fff' // изменяем цвет фона при наведении курсора
})

button.addEventListener('mouseleave', function () {
	button.style.backgroundColor = '#2453d4' // возвращаем исходный цвет фона при уходе курсора
})
