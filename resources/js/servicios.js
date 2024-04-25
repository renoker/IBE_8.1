import Splide from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';




document.addEventListener('DOMContentLoaded', function() {

    let splide = new Splide('#principal', {
      // hide default buttons
      arrows: false,
      type: 'fade',
      pagination: false,
      autoplay: true,
    }).mount();
  
    //attach events to custom buttons
    btnNext.addEventListener('click', e => {
      splide.go('+1')
    })
  
    btnPrev.addEventListener('click', e => {
      splide.go('-1')
    })
  
});


new Splide('#servicios_cumplidos', {
  arrows: false,
  type: 'loop',
  autoplay: true,
}).mount();