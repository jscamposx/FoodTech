var currentPath = window.location.pathname;

if (currentPath.indexOf('/admin') !== 0) {
    console.log('Script toggle navbar loaded')

    document.getElementById('toggle').addEventListener('click', function(event) {
        hideLoginMenu();
        toggleMenu();
    }, { passive: true });

    document.getElementById('btnUser').addEventListener('click', function(event) {
        hideToggleMenu();
        loginMenu();
    }, { passive: true });
}

function toggleMenu() {
    var menu = document.querySelector('.menu-mobile');
    var icon = document.querySelector('.icon-cancel');
    var iconmain = document.querySelector('.icon-menu')
    var isVisible = menu.classList.contains('show');

    if (!isVisible) {
        menu.classList.add('show');
        icon.classList.add('show');
        iconmain.classList.add('show');
    } else {
        menu.classList.remove('show');
        icon.classList.remove('show');
        iconmain.classList.remove('show');
    }
}

function loginMenu() {
    var menu = document.querySelector('.menu-login');
    var isVisible = menu.classList.contains('show');

    if (!isVisible) {
        menu.classList.add('show');
    } else {
        menu.classList.remove('show');
    }
}

function hideToggleMenu() {
    var menu = document.querySelector('.menu-mobile');
    menu.classList.remove('show');
    var icon = document.querySelector('.icon-cancel');
    icon.classList.remove('show');
    var iconmain = document.querySelector('.icon-menu');
    iconmain.classList.remove('show');
}

function hideLoginMenu() {
    var menu = document.querySelector('.menu-login');
    menu.classList.remove('show');
}
