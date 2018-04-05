$(document).ready(function(e) {

	var currentdate = new Date(); 
	var datetime = ("0" + currentdate.getDate()).slice(-2) + "/" + ("0" + (currentdate.getMonth()+1)).slice(-2) + "/" + currentdate.getFullYear() + " " + ("0" + currentdate.getHours()).slice(-2) + ":" + ("0" + currentdate.getMinutes()).slice(-2) + ":" + ("0" + currentdate.getSeconds()).slice(-2);
	$("#fecha").val(datetime);

	$("#utm_source").val(getUrlParameter('utm_source'));
	$("#utm_medium").val(getUrlParameter('utm_medium'));
	$("#utm_campaign").val(getUrlParameter('utm_campaign'));

	$("#formulario").validator().on('submit', function(e) {

		if(!e.isDefaultPrevented()) {

			e.preventDefault();

			var datastring = $("#formulario").serialize();

			$.ajax({
				type: "POST",
				url: "\147\165\141\162\144\141\162\056\160\150\160",
				data: datastring,
				timeout: 10000,
				dataType: "json",
				beforeSend: function() {
					$("#btn_enviar").prop("disabled", true);
				},
				success: function(response) {
					if(response.success === true) {
						location.href = "gracias-por-cotizar.html";
					} else {
						$("#btn_enviar").prop("disabled", false);
					}
				},
				error: function(jqXHR, textStatus, errorThrown) {
					alert("Se ha producido un error. Por favor, inténtelo nuevamente.\nStatus: " + textStatus + ".\nError:" + errorThrown);
					$("#btn_enviar").prop("disabled", false);
				}
			});

		}

	});

});

var getUrlParameter = function getUrlParameter(sParam) {
	var sPageURL = decodeURIComponent(window.location.search.substring(1)), sURLVariables = sPageURL.split('&'), sParameterName, i;
	for (i = 0; i < sURLVariables.length; i++) {
		sParameterName = sURLVariables[i].split('=');
		if (sParameterName[0] === sParam) {
			return sParameterName[1] === undefined ? true : sParameterName[1];
		}
	}
};
