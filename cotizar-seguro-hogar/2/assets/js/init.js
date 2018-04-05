
$(document).ready(function(e) {

	$('#formulario').on('invalid.bs.validator', function(ev) {
		if($(window).width() >= 992) {
			$("#container-aux").height($(".position-absolute-lg").innerHeight() - 225 + 30);
		}
	});

	$("#formulario").validator().on('submit', function(e) {

		if(!e.isDefaultPrevented()) {

			e.preventDefault();

			var datastring = $("#formulario").serialize();

			$.ajax({
				type: "POST",
				url: $("#formulario").attr("action"),
				data: datastring,
				timeout: 10000,
				dataType: "jsonp",
				beforeSend: function() {
					$("#btn_enviar").prop("disabled", true);
				},
				complete: function() {
					location.href = "gracias-por-cotizar.html";
				}
			});

		}

	});

});
