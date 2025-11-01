window.mostrarAlertaTipoPlatillo = function () {
    Swal.fire({
        title: 'Platillo no permitido',
        text: 'No puedes seleccionar este platillo.',
        icon: 'error',
        confirmButtonText: 'Ok',
        customClass: {
            popup: 'pop-alerta',
            confirmButton: 'pop-alerta__button'
        }
    });
};


window.mostrarAlertaNuevaFuncion = function () {
    Swal.fire({
        title: 'Lo implementaremos pronto',
        text: 'No puedes agregar este platillo, estamos trabajando en ello.',
        icon: 'warning',
        confirmButtonText: 'Ok',
       
    });
};
