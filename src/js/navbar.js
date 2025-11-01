var currentPage = window.location.pathname;

function cambiarColorByClass(className, color) {
    var iconos = document.querySelectorAll('.' + className);
    iconos.forEach(function (icono) {
        icono.style.color = color;
        icono.style.fill = color;
    });
}

var defaultColor = '#ff8000';
cambiarColorByClass('icon-container', defaultColor);

if (currentPage === '/platos') {
    var nuevoColor = '#FC5404';
    cambiarColorByClass('icon-container', nuevoColor);
}

if (currentPage === '/sobre-nosotros' || currentPage === '/condiciones-de-uso') {
    var nuevoColor = '#F9B208';
    cambiarColorByClass('icon-container', nuevoColor);
}
