var currentPage = window.location.pathname;
if (currentPage === '/admin/eventos/crear') {
	console.log('Script carousel loaded')
	var swiperPlatillos = null;
	var swiperBebidas = null;
	var swiperOtros = null;
	var SearchInputPlatillos = document.querySelectorAll('.formulario__search--InputPlatillos');
	var SearchInputBebidas = document.querySelectorAll('.formulario__search--InputBebidas');
	var SearchInputOtros = document.querySelectorAll('.formulario__search--InputOtros');
	//checkboxs
	var checkbox = document.getElementById('checkbox');
	var checkbox1 = document.getElementById('checkbox1');
	var checkbox2 = document.getElementById('checkbox2');
	//buttons
	var mostrarTodasOtrosBtn = document.getElementById('mostrarTodasOtrosBtn');
	var mostrarSeleccionadasOtrosBtn = document.getElementById('mostrarSeleccionadasOtrosBtn');
	var categoriasOtrosBtns = document.querySelectorAll('.categoriasOtrosBtn');

	var mostrarTodasBebBtn = document.getElementById('mostrarTodasBebBtn');
	var mostrarSeleccionadasBebBtn = document.getElementById('mostrarSeleccionadasBebBtn');
	var categoriasBebBtns = document.querySelectorAll('.categoriasBebBtn');

	var mostrarTodosBtn = document.getElementById('mostrarTodosBtn');
	var mostrarSeleccionadosBtn = document.getElementById('mostrarSeleccionadosBtn');
	var categoriasBtns = document.querySelectorAll('.categoriasBtn');


	function marcarCheckbox(checkbox, formularioId) {
		var formularioSearch = document.getElementById(formularioId);
		if (checkbox.checked) {
			formularioSearch.classList.remove('formulario__search--selected');
		} else {
			formularioSearch.classList.add('formulario__search--selected');
			if (checkbox === checkbox1) {
				removeSelectedClassFromBebButtons();
			} else if (checkbox === checkbox2) {
				removeSelectedClassFromOtrosButtons();
			} else {
				removeSelectedClassFromButtons();
			}
		}
	}

	function asignarEventoCheckbox(checkbox, formularioId) {
		checkbox.addEventListener('change', function () {
			marcarCheckbox(checkbox, formularioId);
		});
	}


	asignarEventoCheckbox(checkbox, 'searchPlatillos');
	asignarEventoCheckbox(checkbox1, 'searchBebidas');
	asignarEventoCheckbox(checkbox2, 'searchOtros');


	function filtrarPlatillos(tipo_platillo) {
		var platillos = document.querySelectorAll('.card-swiper');
		platillos.forEach(function (platillo) {
			platillo.style.display = 'block';
		});

		if (tipo_platillo !== 'todos') {
			if (tipo_platillo === 'selected') {
				var platillosNoSeleccionados = document.querySelectorAll('.card-swiper:not(.selected)');
				platillosNoSeleccionados.forEach(function (platillo) {
					platillo.style.display = 'none';
				});
			} else {
				var platillosNoFiltrados = document.querySelectorAll('.card-swiper:not([data-tipo="' + tipo_platillo + '"])');
				platillosNoFiltrados.forEach(function (platillo) {
					platillo.style.display = 'none';
				});
			}
		}
	}


	function filtrarBebidas(tipo_bebida) {
		var bebidas = document.querySelectorAll('.card-swiper-bebidas');
		bebidas.forEach(function (bebida) {
			bebida.style.display = 'block';
		});

		if (tipo_bebida !== 'todos') {
			if (tipo_bebida === 'selected') {
				var bebidasNoSeleccionadas = document.querySelectorAll('.card-swiper-bebidas:not(.selected)');
				bebidasNoSeleccionadas.forEach(function (bebida) {
					bebida.style.display = 'none';
				});
			} else {
				var bebidasNoFiltradas = document.querySelectorAll('.card-swiper-bebidas:not([data-tipo="' + tipo_bebida + '"])');
				bebidasNoFiltradas.forEach(function (bebida) {
					bebida.style.display = 'none';
				});
			}
		}
	}


	function filtrarOtros(tipo_otros) {
		var otros = document.querySelectorAll('.card-swiper-otros');
		otros.forEach(function (otro) {
			otro.style.display = 'block';
		});

		if (tipo_otros !== 'todos') {
			if (tipo_otros === 'selected') {
				var otrosNoSeleccionadas = document.querySelectorAll('.card-swiper-otros:not(.selected)');
				otrosNoSeleccionadas.forEach(function (otro) {
					otro.style.display = 'none';
				});
			} else {
				var otrosNoFiltradas = document.querySelectorAll('.card-swiper-otros:not([data-tipo="' + tipo_otros + '"])');
				otrosNoFiltradas.forEach(function (otro) {
					otro.style.display = 'none';
				});
			}
		}
	}

	document.addEventListener('DOMContentLoaded', function () {
		var inputs = document.querySelectorAll('.formulario__search--InputPlatillos, .formulario__search--InputBebidas, .formulario__search--InputOtros');
		inputs.forEach(function (input) {
			input.addEventListener('input', function () {
				filtrarPorNombre(this.value, this.getAttribute('data-target'));
			});
		});

		function filtrarPorNombre(nombre, target) {
			var selector = '.' + target;
			var platillos = document.querySelectorAll(selector);
			platillos.forEach(function (platillo) {
				var nombrePlatillo = platillo.getAttribute('data-nombre').toLowerCase();
				if (nombrePlatillo.includes(nombre.toLowerCase())) {
					platillo.style.display = 'block';
				} else {
					platillo.style.display = 'none';
				}
			});
			restablecerSwiperPlatillos();
			restablecerSwiperOtros();
			restablecerSwiperBebidas();
		}
	});

	document.addEventListener('DOMContentLoaded', function () {
		if (mostrarTodasBebBtn) {
			mostrarTodasBebBtn.addEventListener('click', function () {
				removeSelectedClassFromBebButtons();
				filtrarBebidas('todos');
				restablecerSwiperBebidas();
				restablecerSearchBebidas();
				mostrarTodasBebBtn.classList.add('formulario__filter--button--selected');
			});
		}

		categoriasBebBtns.forEach(function (categoriaBebBtn) {
			categoriaBebBtn.addEventListener('click', function () {
				removeSelectedClassFromBebButtons();
				var categoriaBeb = categoriaBebBtn.getAttribute('data-categoria');
				filtrarBebidas(categoriaBeb);
				restablecerSwiperBebidas();
				restablecerSearchBebidas();
				categoriaBebBtn.classList.add('formulario__filter--button--selected');
			});
		});

		if (mostrarSeleccionadasBebBtn) {
			mostrarSeleccionadasBebBtn.addEventListener('click', function () {
				removeSelectedClassFromBebButtons();
				filtrarBebidas('selected');
				restablecerSwiperBebidas();
				restablecerSearchBebidas();
				mostrarSeleccionadasBebBtn.classList.add('formulario__filter--button--selected');
			});
		}
		initSwiperBebidas();
		swiperBebidas.update();
	});

	document.addEventListener('DOMContentLoaded', function () {
		if (mostrarTodosBtn) {
			mostrarTodosBtn.addEventListener('click', function () {
				removeSelectedClassFromButtons();
				filtrarPlatillos('todos');
				restablecerSearchPlatillos();
				restablecerSwiperPlatillos();
				mostrarTodosBtn.classList.add('formulario__filter--button--selected');
			});
		}

		categoriasBtns.forEach(function (categoriaBtn) {
			categoriaBtn.addEventListener('click', function () {
				removeSelectedClassFromButtons();
				var categoria = categoriaBtn.getAttribute('data-categoria');
				filtrarPlatillos(categoria);
				restablecerSearchPlatillos();
				restablecerSwiperPlatillos();;
				categoriaBtn.classList.add('formulario__filter--button--selected');
			});
		});

		if (mostrarSeleccionadosBtn) {
			mostrarSeleccionadosBtn.addEventListener('click', function () {
				removeSelectedClassFromButtons();
				filtrarPlatillos('selected');
				restablecerSearchPlatillos();
				restablecerSwiperPlatillos();;
				mostrarSeleccionadosBtn.classList.add('formulario__filter--button--selected');
			});
		}
		initSwiperPlatillos();
		swiperPlatillos.update();
	});

	function removeSelectedClassFromBebButtons() {
		if (mostrarTodasBebBtn) {
			mostrarTodasBebBtn.classList.remove('formulario__filter--button--selected');
		}

		if (mostrarSeleccionadasBebBtn) {
			mostrarSeleccionadasBebBtn.classList.remove('formulario__filter--button--selected');
		}

		categoriasBebBtns.forEach(function (categoriaBebBtn) {
			categoriaBebBtn.classList.remove('formulario__filter--button--selected');
		});
	}


	function removeSelectedClassFromOtrosButtons() {
		if (mostrarTodasOtrosBtn) {
			mostrarTodasOtrosBtn.classList.remove('formulario__filter--button--selected');
		}

		if (mostrarSeleccionadasOtrosBtn) {
			mostrarSeleccionadasOtrosBtn.classList.remove('formulario__filter--button--selected');
		}

		categoriasOtrosBtns.forEach(function (categoriaOtroBtn) {
			categoriaOtroBtn.classList.remove('formulario__filter--button--selected');
		});
	}




	function removeSelectedClassFromButtons() {
		if (mostrarTodosBtn) {
			mostrarTodosBtn.classList.remove('formulario__filter--button--selected');
		}

		if (mostrarSeleccionadosBtn) {
			mostrarSeleccionadosBtn.classList.remove('formulario__filter--button--selected');
		}

		categoriasBtns.forEach(function (categoriaBtn) {
			categoriaBtn.classList.remove('formulario__filter--button--selected');
		});
	}

	document.addEventListener('DOMContentLoaded', function () {
		if (mostrarTodasOtrosBtn) {
			mostrarTodasOtrosBtn.addEventListener('click', function () {
				removeSelectedClassFromOtrosButtons();
				filtrarOtros('todos');
				restablecerSwiperOtros();
				restablecerSearchOtros();
				mostrarTodasOtrosBtn.classList.add('formulario__filter--button--selected');
			});
		}

		categoriasOtrosBtns.forEach(function (categoriaOtroBtn) {
			categoriaOtroBtn.addEventListener('click', function () {
				removeSelectedClassFromOtrosButtons();
				var categoriaOtro = categoriaOtroBtn.getAttribute('data-categoria');
				filtrarOtros(categoriaOtro);
				restablecerSwiperOtros();
				restablecerSearchOtros();
				categoriaOtroBtn.classList.add('formulario__filter--button--selected');
			});
		});

		if (mostrarSeleccionadasOtrosBtn) {
			mostrarSeleccionadasOtrosBtn.addEventListener('click', function () {
				removeSelectedClassFromOtrosButtons();
				filtrarOtros('selected');
				restablecerSwiperOtros();
				restablecerSearchOtros();
				mostrarSeleccionadasOtrosBtn.classList.add('formulario__filter--button--selected');
			});
		}
		initSwiperOtros();
		swiperOtros.update();
	});

	function initSwiperPlatillos() {
		var swiperContainer = document.querySelector('.mySwiper');

		if (swiperContainer) {
			swiperPlatillos = new Swiper(swiperContainer, {
				spaceBetween: 30,
				loop: false,
				initialSlide: 0,
				grabCursor: true,
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				breakpoints: {
					236: {
						slidesPerView: 2,
						spaceBetween: 10,
					},
					520: {
						slidesPerView: 3,
					},
					768: {
						slidesPerView: 4,
					},
					992: {
						slidesPerView: 4,
					},
					1200: {
						slidesPerView: 4,
					},
				},
				on: {
					init: function () {
						filtrarPlatillos('Guisos');
					},
				},
			});
		}
	}

	function initSwiperBebidas() {
		var swiperContainer1 = document.querySelector('.mySwiperBebidas');

		if (swiperContainer1) {
			swiperBebidas = new Swiper(swiperContainer1, {
				spaceBetween: 30,
				loop: false,
				initialSlide: 0,
				grabCursor: true,
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				
				breakpoints: {
					236: {
						slidesPerView: 2,
						spaceBetween: 10,
					},
					520: {
						slidesPerView: 3,
					},
					768: {
						slidesPerView: 4,
					},
					992: {
						slidesPerView: 4,
					},
					1200: {
						slidesPerView: 4,
					},
				},
				on: {
					init: function () {
						filtrarBebidas('Bebidas');

					},
				},
			});
		}
	}

	function initSwiperOtros() {
		var swiperContainer2 = document.querySelector('.mySwiperOtros');

		if (swiperContainer2) {
			swiperOtros = new Swiper(swiperContainer2, {
				spaceBetween: 30,
				loop: false,
				initialSlide: 0,
				grabCursor: true,
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				breakpoints: {
					236: {
						slidesPerView: 2,
						spaceBetween: 10,
					},
					520: {
						slidesPerView: 3,
					},
					768: {
						slidesPerView: 4,
					},
					992: {
						slidesPerView: 4,
					},
					1200: {
						slidesPerView: 4,
					},
				},
				on: {
					init: function () {
						filtrarOtros('Acompañante');
					},
				},
			});
		}
	}

	function restablecerSwiperPlatillos() {
		swiperPlatillos.slideTo(0);
		swiperPlatillos.update();
	}

	function restablecerSwiperBebidas() {
		swiperBebidas.slideTo(0);
		swiperBebidas.update();
	}

	function restablecerSwiperOtros() {
		swiperOtros.slideTo(0);
		swiperOtros.update();
	}

	function restablecerSearchPlatillos() {
		checkbox.checked = true;
		marcarCheckbox(checkbox, 'searchPlatillos');
	}

	function restablecerSearchBebidas() {
		checkbox1.checked = true;
		marcarCheckbox(checkbox1, 'searchBebidas');
	}

	function restablecerSearchOtros() {
		checkbox2.checked = true;

		marcarCheckbox(checkbox2, 'searchOtros');
	}



	//evitar post de botones
	document.addEventListener('DOMContentLoaded', function () {
		var formulario = document.querySelector('.formulario--eventos');
		if (formulario) {
			formulario.addEventListener('submit', function (event) {
				var botonEnviar = event.submitter;
				if (botonEnviar && botonEnviar.classList.contains('enviar-formulario')) { } else {
					event.preventDefault();
				}
			});
		}
	});
}