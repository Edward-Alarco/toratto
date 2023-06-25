(function(){

    if(document.querySelector('.planos')){

        let activo = '1d';

        //hidden dormitorios
        const hiddenDorms = document.querySelector('[name="your-dorms"]'),
            hiddenFlat = document.querySelector('[name="your-flat"]');
        //tabs dormitorios
        const buttons = Array.from(document.querySelectorAll('.dormitorios button'));
        //select
        const select = document.querySelector('#select'),
            selectStyled = document.querySelector('.select-styled p'),
            selectOptions = document.querySelector(".select-options"),
            opcionesLi = Array.from(selectOptions.querySelectorAll('li'));
        //imagen plano
        const img = document.querySelector('.canvas img');

        //poniendole valores a los input hiddens
        hiddenDorms.value = activo.replace('d','');
        hiddenFlat.value = select.selectedOptions[0].textContent;

        buttons.forEach(button=>{
            button.addEventListener('click', (e)=>{
                e.preventDefault();
                buttons.forEach(j=>{if(j.classList.contains('active')){j.classList.remove('active')}})
                e.currentTarget.classList.add('active');

                if(selectOptions.classList.contains('open')){
                    selectOptions.classList.remove('open')
                }
                opcionesLi.forEach(opcion=>{if(!opcion.classList.contains('none')){opcion.classList.add('none')}})

                //tab activo - nro de dormitorios
                activo = e.currentTarget.getAttribute('data-id').toString();

                //mostrando los li segun el nro de dormitorios
                Array.from(selectOptions.querySelectorAll(`li[data-dormitorios="${activo}"]`)).forEach(li=>{
                    li.classList.remove('none')
                })

                selectStyled.textContent = 'Seleccionar Flat';
                hiddenFlat.value = '';
                hiddenDorms.value = activo.replace('d','');
            })
        })

        selectStyled.parentElement.addEventListener("click", function () {
            selectOptions.classList.toggle("open");
        });

        selectOptions.addEventListener("click", function (event) {
            if(event.target.tagName === "LI"){
                var value = event.target.getAttribute("data-value");
                select.value = value;
                selectStyled.textContent = event.target.textContent;
                selectOptions.classList.remove("open");

                if(event.target.getAttribute('data-img')!=''){
                    img.src = event.target.getAttribute('data-img')
                }

                hiddenFlat.value = select.selectedOptions[0].textContent;
            }
        });

    }

})();