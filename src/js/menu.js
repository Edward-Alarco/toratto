(function(){

    const burgers = Array.from(document.querySelectorAll('.toggle')),
        aside = document.querySelector('aside'),
        bg_aside = document.querySelector('.bg_aside');

    burgers.forEach(burger=>{
        burger.addEventListener('click', (e)=>{
            e.preventDefault();

            aside.classList.toggle('active')
            bg_aside.classList.toggle('active')

        })
    })

})();