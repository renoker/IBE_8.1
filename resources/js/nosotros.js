import Splide from '@splidejs/splide';

new Splide('#certificaciones', {
    arrows: false,
    type: 'loop',
    autoplay: true,
}).mount();

new Splide('#certificaciones_cuentas', {
    arrows: false,
    type: 'loop',
    autoplay: false,
}).mount();