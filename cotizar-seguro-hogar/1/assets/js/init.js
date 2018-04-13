
$(document).ready(function(e) {

	$("#00NQ0000001wsEB").blur(function() {
		var area = $("#00NQ0000001wsEB").val();
		$("#00NQ0000001wsEB").val(area.replace(/^0+/, ''));
	});

	$("#phone").blur(function(){
		(validate_number_length())?$("#phone-error").hide():$("#phone-error").show();
	}).keyup(function(){
        (validate_number_length())?$("#btn_enviar").prop("disabled", false):$("#btn_enviar").prop("disabled", true);
    });

	function validate_number_length(){
        var valid = false;
        var maxLength = 10;
        var completeNumber = $("#00NQ0000001wsEB").val() + $("#phone").val();
        if(completeNumber.length == maxLength){
            valid = true;
        }
        return valid;
	}

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
