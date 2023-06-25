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
                1024: {
                    perPage: 2,
                    gap: '1.25rem',
                },
                768: {
                    perPage: 1,
                    arrows: false,
                    gap: '1rem',
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
            breakpoints: {
                660: {
                    perPage: 1
                }
            }
        }).mount(window.splide.Extensions);
    }

})();