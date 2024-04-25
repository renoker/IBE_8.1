const menuButtonNext = document.getElementById('next')
const menuButtonPrew = document.getElementById('prew')
const buttonClose = document.getElementById('closePopUp')
const buttonOpen = document.getElementById('openPopUp')

menuButtonNext.addEventListener('click', () => {
    var posicion = document.getElementById('posicion').value    
    if(posicion < 31) {
        var lugar = Number(posicion) + 1
        window.location.href = '/catalogo/' + lugar + '/#detalle_maquina'
    }    
})

menuButtonPrew.addEventListener('click', () => {
    var posicion = document.getElementById('posicion').value    
    if(posicion > 1) {
        var lugar = Number(posicion) - 1
        window.location.href = '/catalogo/' + lugar + '/#detalle_maquina'
    }
})

// buttonClose.addEventListener('click', () => {
//     var popup = document.getElementById('popup')
//     popup.classList.remove('active')
// })

buttonOpen.addEventListener('click', () => {
    var popup = document.getElementById('popup')
    popup.classList.add('active')
})