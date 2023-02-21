const button = document.getElementById('myButton')

button.addEventListener('mouseenter', () => {
	button.style.backgroundColor = 'white' // изменяем цвет кнопки при наведении курсора
	button.querySelector('::before').style.height = '100%' // изменяем высоту анимации при наведении курсора
	button.querySelector('::before').style.backgroundColor = 'blue' // изменяем цвет анимации при наведении курсора
})

button.addEventListener('mouseleave', () => {
	button.style.backgroundColor = 'blue' // возвращаем исходный цвет кнопки при уходе курсора
	button.querySelector('::before').style.height = '' // возвращаем исходную высоту анимации при уходе курсора
	button.querySelector('::before').style.backgroundColor = 'white' // возвращаем исходный цвет анимации при уходе курсора
})
