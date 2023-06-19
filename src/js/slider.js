(function(){

    if(document.querySelector('#splideHero')){
        new Splide('#splideHero', {
            type: 'loop',
            perPage: 1,
            perMove: 1,
            arrows: false,
            pagination: false
        }).mount();
    }

    if(document.querySelector('#splideDepartamentos')){
        new Splide('#splideDepartamentos', {
            type: 'loop',
            perPage: 2,
            gap: '2.8rem',
            pagination: false,
            perMove: 1,
            breakpoints: {
                768: {
                    perPage: 1,
                    arrows: false,
                    gap: '2.8rem',
                },
            }
        }).mount();
    }

    if(document.querySelector('#splidePublications')){
        new Splide('#splidePublications', {
            type: 'loop',
            focus: 'center',
            autoWidth: true,
            perMove: 1,
            arrows: false,
            pagination: false,
            clones: true,
            gap: '10px',
        }).mount(window.splide.Extensions);
    }

})();