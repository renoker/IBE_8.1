import Splide from '@splidejs/splide';

new Splide('#certificaciones_cuentas', {
    arrows: false,
    type: 'loop',
    autoplay: false,  
    breakpoints: {
        600: {
            perPage: 1
        }
    } 
}).mount();
