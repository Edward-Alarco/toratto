(function(){

    new Splide('#splideHero', {
        type: 'loop',
        perPage: 1,
        perMove: 1,
        arrows: false,
        pagination: false
    }).mount();

    new Splide('#splideDepartamentos', {
        type: 'loop',
        perPage: 2,
        perMove: 1,
        arrows: true,
        gap: '2.8rem',
        pagination: false
    }).mount();

})();