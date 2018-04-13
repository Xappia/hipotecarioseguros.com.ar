
$(document).ready(function(e) {

	$("#00NQ0000001wsEG").blur(function() {
		var area = $("#00NQ0000001wsEG").val();
		$("#00NQ0000001wsEG").val(area.replace(/^0+/, ''));
	});

    $("#phone").blur(function(){
        (validate_number_length())?$("#phone-error").hide():$("#phone-error").show();
    }).keyup(function(){
        if(validate_number_length()) {
            $("#btn_enviar").prop("disabled", false);
            $("#phone-error").hide();
        } else {
            $("#btn_enviar").prop("disabled", true);
        }
    });

    function validate_number_length(){
        var valid = false;
        var maxLength = 10;
        var completeNumber = $("#00NQ0000001wsEG").val() + $("#phone").val();
        if(completeNumber.length == maxLength){
            valid = true;
        }
        return valid;
    }

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
