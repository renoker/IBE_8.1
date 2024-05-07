import Splide from '@splidejs/splide';
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';


new Splide('#principal', {
  arrows: false,
  type: 'loop',
  autoplay: true,
}).mount();


new Splide('#servicios_cumplidos', {
  arrows: false,
  type: 'loop',
  autoplay: true,
}).mount();

const clientes = new Splide( '#nuestros_clientes', {
  type   : 'loop',
  drag   : 'free',
  focus  : 'center',
  perPage: 6,
  arrows: false,
  pagination: false,
});  

clientes.mount({ AutoScroll });