jQuery(document).ready(function($) {
    var ordenAscendente = true; // Variable para controlar el orden ascendente y descendente
    var ordenAscendente2 = true; // Variable para controlar el orden ascendente y descendente

    $('.filtro-nombres').on('click', function(e) {
        e.preventDefault();
        
        // Alternar entre el orden ascendente y descendente
        ordenAscendente = !ordenAscendente;

        var orden = ordenAscendente ? 'ASC' : 'DESC';

        // Obtener las entradas y ordenarlas por nombre
        var $entradas = $('.post');
        $entradas.sort(function(a, b) {
            var nombreA = $(a).data('nombre').toUpperCase();
            var nombreB = $(b).data('nombre').toUpperCase();

            if (orden === 'ASC') {
                return (nombreA < nombreB) ? -1 : (nombreA > nombreB) ? 1 : 0;
            } else {
                return (nombreA > nombreB) ? -1 : (nombreA < nombreB) ? 1 : 0;
            }
        });

        // Vaciar el contenedor y agregar las entradas ordenadas
        var $contenedor = $('.busqueda_contenido');
        $contenedor.empty().append($entradas);
    });

    $('.filtro-vistos').on('click', function(e) {
        e.preventDefault();
        
        // Alternar entre el orden ascendente y descendente
        ordenAscendente2 = !ordenAscendente2;

        var orden2 = ordenAscendente2 ? 'ASC' : 'DESC';

        // Obtener las entradas y ordenarlas por nombre
        var $entradas = $('.post');
        $entradas.sort(function(a, b) {
            var numeroA = $(a).data('vistas');
            var numeroB = $(b).data('vistas');

            if (orden2 === 'ASC') {
                return (numeroA < numeroB) ? -1 : (numeroA > numeroB) ? 1 : 0;
            } else {
                return (numeroA > numeroB) ? -1 : (numeroA < numeroB) ? 1 : 0;
            }
        });

        // Vaciar el contenedor y agregar las entradas ordenadas
        var $contenedor = $('.busqueda_contenido');
        $contenedor.empty().append($entradas);
    });
     

});