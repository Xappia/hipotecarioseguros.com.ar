
$(document).ready(function(e) {

	$("#00NQ0000001wsEB").blur(function() {
		var area = $("#00NQ0000001wsEB").val();
		$("#00NQ0000001wsEB").val(area.replace(/^0+/, ''));
        validate_number_length();
	});

	$("#phone").blur(validate_number_length()).keyup(function(){
        $("#btn_enviar").prop("disabled", true);
        var maxLength = 10;
        var completeNumber = $("#00NQ0000001wsEB").val() + $("#phone").val();
        if(completeNumber.length == maxLength){
            $("#btn_enviar").prop("disabled", false);
        }
    });

	function validate_number_length(){
        $("#phone-error").show();
        var maxLength = 10;
        var completeNumber = $("#00NQ0000001wsEB").val() + $("#phone").val();
        if(completeNumber.length == maxLength){
            $("#phone-error").hide();
        }
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
