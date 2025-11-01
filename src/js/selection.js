var currentPage = window.location.pathname;
if (currentPage === '/admin/eventos/crear') {
	console.log('Script selection loaded')
	$(document).ready(function () {
		function initializeSelectionOtros(sectionSelector, selectedItemsInput, selectedItemClass, numeroPlatillosInput, tiposNoPermitidos) {
			var selectedItems = $(selectedItemsInput).val();
			if (selectedItems) {
				var selectedItemsArray = selectedItems.split(',');
				selectedItemsArray.forEach(function (nombre) {
					$(sectionSelector + '[data-nombre="' + nombre + '"]').addClass(selectedItemClass);
				});
			}

			$(sectionSelector).on("click", function () {
				var nombre = $(this).data("nombre");
				var tipoPlatillo = $(this).data("tipo");

				if (!tiposNoPermitidos.includes(tipoPlatillo)) {
					$(this).toggleClass(selectedItemClass);
					var selectedItemsArray = [];
					$(sectionSelector + "." + selectedItemClass).each(function () {
						selectedItemsArray.push($(this).data("nombre"));
					});
					$(selectedItemsInput).val(selectedItemsArray.join(','));
					var numeroPlatillos = selectedItemsArray.length;
					$(numeroPlatillosInput).val(numeroPlatillos);
				} else {
					mostrarAlertaTipoPlatillo();
				}
			});
		}


		function initializeSelection(sectionSelector, selectedItemsInput, selectedItemClass, numeroPlatillosInput, tipoPermitido) {
			var selectedItems = $(selectedItemsInput).val();
			if (selectedItems) {
				var selectedItemsArray = selectedItems.split(',');
				selectedItemsArray.forEach(function (nombre) {
					$(sectionSelector + '[data-nombre="' + nombre + '"]').addClass(selectedItemClass);
				});
			}

			$(sectionSelector).on("click", function () {
				var nombre = $(this).data("nombre");
				var tipoPlatillo = $(this).data("tipo");

				if (tipoPermitido.includes(tipoPlatillo)) {
					$(this).toggleClass(selectedItemClass);
					var selectedItemsArray = [];
					$(sectionSelector + "." + selectedItemClass).each(function () {
						selectedItemsArray.push($(this).data("nombre"));
					});
					$(selectedItemsInput).val(selectedItemsArray.join(','));
					var numeroPlatillos = selectedItemsArray.length;
					$(numeroPlatillosInput).val(numeroPlatillos);
				} else {
					mostrarAlertaTipoPlatillo();
				}
			});
		}

		if (document.querySelector(".card-swiper")) {
			var tipoPermitidoPlatillos = ["Guisos", "Platillos"];
			initializeSelection(".card-swiper", "#platillos_seleccionados", "selected", "#numero_platillos", tipoPermitidoPlatillos);
		}

		if (document.querySelector(".card-swiper-bebidas")) {
			var tipoPermitidoBebidas = ["Bebidas"];
			initializeSelection(".card-swiper-bebidas", "#bebidas_seleccionadas", "selected", "#numero_bebidas", tipoPermitidoBebidas);
		}

		if (document.querySelector(".card-swiper-otros")) {
			var tiposNoPermitidosOtros = ["Guisos", "Platillos", "Bebidas"];
			initializeSelectionOtros(".card-swiper-otros", "#otros_seleccionados", "selected", "#numero_otros", tiposNoPermitidosOtros);
		}
	}
	);

}