
$(document).ready(function(e) {


	$("#00NW0000001YdwE").blur(function() {
		var area = $("#00NW0000001YdwE").val();
		$("#00NW0000001YdwE").val(area.replace(/^0+/, ''));
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
	
	$("#phone").focus(function(){
		changePhoneMaxLength(this);
	});
	
	$("#00NW0000001YdwE").keydown(function(){
		validateFirstNumber(this);
	});
	
	$("#00NW0000001YdwE").focusout(function(){
		eraseFirstZero(this);
	});
	
	

	function validate_number_length(){
        var valid = false;
        var maxLength = 10;
        var completeNumber = $("#00NW0000001YdwE").val() + $("#phone").val();
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
	function validateFirstNumber(ele) {
		if (ele.value.charAt(0) == "0") {
			ele.setAttribute("maxlength", "5");
		}
		if (ele.value.charAt(0) != "0") {
			ele.setAttribute("maxlength", "4");
		}
	}
	function eraseFirstZero(ele) {
		var s = ele.value;
		while (s.charAt(0) === '0') {
			s = s.substr(1);
			}
		ele.value = s;
	}
	function changePhoneMaxLength(ele) {
		var newLengthForPhone = 10 - document.getElementById('00NW0000001YdwE').value.length;
		ele.setAttribute("maxlength", newLengthForPhone);
	}
	function changeAreaMaxLength(ele) {
		if (document.getElementById("phone").value.length > 6) {
			var newLengthForArea = 10 - document.getElementById("phone").value.length;
			ele.setAttribute("maxlength", newLengthForArea);
		}
	}

