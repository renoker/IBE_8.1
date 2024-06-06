import Splide from '@splidejs/splide';

new Splide('#certificaciones', {
    arrows: false,
    type: 'loop',
    autoplay: true,
}).mount();

const menuButton = document.getElementById('btn_redes')

menuButton.addEventListener('click', () => {
    var red = document.getElementById('redes')
    red.classList.toggle("active");
})

