document.addEventListener('DOMContentLoaded', function() {
    eventListeners();
});

function eventListeners() { 
    const mobilemenu = document.querySelector('.mobile-menu');

    mobilemenu.addEventListener('click', navegacionResponsive)
};

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    /* OPCION 1
    if(navegacion.classList.contains('mostrar')) {
        navegacion.classList.remove('mostrar'); // Ocultar navegación
    } else {
        navegacion.classList.add('mostrar');
    }
    */

    // OPCION 2
    navegacion.classList.toggle('mostrar');
}