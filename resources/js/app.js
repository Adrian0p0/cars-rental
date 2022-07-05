require('./bootstrap');

import Glide, { Breakpoints } from '@glidejs/glide'

function checkSizeSlider(slider,sm=1,md=3,lg=5, def=5){
    let views = def;
    if(window.innerWidth<450){
        views = sm
    }
    else if(window.innerWidth<720){
        views = md
    }
    else if(window.innerWidth<1024){
        views = lg
    }
    slider.update({perView:views})
}

try{
    let Glider = new Glide('.glide',carouselconfig).mount()
    window.addEventListener('resize', function(){
        checkSizeSlider(Glider, 4);
    });
}
catch{}
try{
    let footerGlider = new Glide('.footer_glide',footerCarousel).mount()
    window.addEventListener('resize', function(){
        checkSizeSlider(footerGlider, 3, 5, 10,10);
    });
}
catch{}



import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect'
window.Alpine = Alpine;
Alpine.plugin(intersect)
Alpine.start();
