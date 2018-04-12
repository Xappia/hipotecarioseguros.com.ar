
$(document).ready(function(e) {

	$("#00NW0000001YdwE").blur(function() {
		var area = $("#00NW0000001YdwE").val();
		$("#00NW0000001YdwE").val(area.replace(/^0+/, ''));
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
