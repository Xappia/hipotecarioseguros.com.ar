$(function() {
    $("#next").one("click",function(){
            var opcion = $('input:radio[name=radiohorizontal]:checked').val();
			var AditionalArgument;
            var miObjeto = new Object();
            switch(opcion) {
                case "pokemon":
                    miObjeto.i1 = 1;
                    miObjeto.i2 = 0;
                    miObjeto.i3 = 0;
                    miObjeto.i4 = 0;
                    break;
                case "mazinger":
                    miObjeto.i1 = 0;
                    miObjeto.i2 = 1;
                    miObjeto.i3 = 0;
                    miObjeto.i4 = 0;
                    break;
                case "moon":
                    miObjeto.i1 = 0;
                    miObjeto.i2 = 0;
                    miObjeto.i3 = 1;
                    miObjeto.i4 = 0;
                    break;
                case "heidi":
                    miObjeto.i1 = 0;
                    miObjeto.i2 = 0;
                    miObjeto.i3 = 0;
                    miObjeto.i4 = 1;
                    break;
                default:
                    
            }
			
			if(miObjeto.i1 == 1 || miObjeto.i2 == 1)
				AditionalArgument = "HOMBRE";
			else
				AditionalArgument = "MUJER";			

            var myString = JSON.stringify(miObjeto);
            //alert(myString);
			
			call_receive_question(myString,"pregunta-2",AditionalArgument);

            var preguntas = new Object();
            preguntas = JSON.parse(localStorage.getItem("preguntas")); 
            preguntas.p2 = miObjeto;

            console.log(preguntas);

            localStorage.setItem("preguntas", JSON.stringify(preguntas));
            //alert(JSON.stringify(preguntas));
      
        });
});