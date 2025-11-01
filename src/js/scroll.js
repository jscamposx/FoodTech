const currentPage = window.location.pathname;
const targetPages = ['/login', '/olvide', '/registro', '/restablecer', '/confirmar-cuenta', '/mensaje'];


if (targetPages.includes(currentPage)) {
    console.log('Script scroll loaded1!');
    const targetElement = document.getElementById('authID');

    if (targetElement) {
        const windowHeight = window.innerHeight;
        const targetPosition = targetElement.getBoundingClientRect().top - (windowHeight / 8);
        window.scrollTo({
            top: targetPosition,
            behavior: 'instant',
            passive: true 
        });
    }
}

    

if(currentPage == '/platos'){
    console.log('Script Highlight loaded!');
    document.addEventListener('DOMContentLoaded', function () {
        const btnAdd = document.querySelectorAll('.platos__card--btn');
        btnAdd.forEach(function (btn) {
            btn.addEventListener('click', function () {
                mostrarAlertaNuevaFuncion();
            });
        });
    });


    document.addEventListener('DOMContentLoaded', function () {
        var btnHeader = document.getElementById('btnHeader');
        btnHeader.addEventListener('click', function () {
            const tpPlatosContenedor = document.querySelector('.platos__main');
            window.scrollTo({
                top: tpPlatosContenedor.offsetTop - 100,
                behavior: 'smooth',
                passive: true  
            });
    
            const allPlatosCards = document.querySelectorAll('.platos__card');
            for (let i = 0; i < Math.min(8, allPlatosCards.length); i++) {
                const tpPlatos = allPlatosCards[i];
                setTimeout(function () {
                    tpPlatos.classList.add('highlight');
                    setTimeout(function () {
                        tpPlatos.classList.remove('highlight');
                    }, 1000);
                }, i * 500);
            }
        }, { passive: true });  
    });

}






