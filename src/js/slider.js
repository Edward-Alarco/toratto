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
            perMove: 1,
            arrows: true,
            gap: '2.8rem',
            pagination: false
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