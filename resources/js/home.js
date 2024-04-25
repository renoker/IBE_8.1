import Splide from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';




document.addEventListener('DOMContentLoaded', function() {

    let splide = new Splide('#principal', {
      // hide default buttons
      arrows: false,
      type: 'fade',
      pagination: false,
      autoplay: false, 
    }).mount();
  
    //attach events to custom buttons
    btnNext.addEventListener('click', e => {
      splide.go('+1')
    })
  
    btnPrev.addEventListener('click', e => {
      splide.go('-1')
    })
  
});

const clientes = new Splide( '#nuestros_clientes', {
    type   : 'loop',
    drag   : 'free',
    focus  : 'center',
    perPage: 6,
    arrows: false,
    pagination: false,
});  

  clientes.mount({ AutoScroll });