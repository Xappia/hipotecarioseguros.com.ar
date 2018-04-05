$(function() {
    $("#next").one("click",function(){
            var opcion = $('input:radio[name=vivis]:checked').val();
            var miObjeto = new Object();
			var AditionalArgument;
            switch(opcion) {
                case "solo":
                    miObjeto.i1 = 1;
                    miObjeto.i2 = 0;
                    miObjeto.i3 = 0;
					AditionalArgument = "SOLO";
                    break;
                case "sola":
                    miObjeto.i1 = 1;
                    miObjeto.i2 = 0;
                    miObjeto.i3 = 0;
					AditionalArgument = "SOLA";
                    break;
                case "pareja":
                    miObjeto.i1 = 0;
                    miObjeto.i2 = 1;
                    miObjeto.i3 = 0;
					AditionalArgument = "PAREJA";
                    break;
                case "familia":
                    miObjeto.i1 = 0;
                    miObjeto.i2 = 0;
                    miObjeto.i3 = 1;
					AditionalArgument = "FAMILIA";
                    break;
                default:
                    
            }
            

            if(opcion != undefined){
              var myString = JSON.stringify(miObjeto);
              //alert(myString);
            }
			
			call_receive_question(myString,"pregunta-1",AditionalArgument);
             
            var preguntas = new Object();
            preguntas = JSON.parse(localStorage.getItem("preguntas")); 
            preguntas.p1 = miObjeto;

            console.log(preguntas);

            localStorage.setItem("preguntas", JSON.stringify(preguntas));

            //alert(JSON.stringify(preguntas));
      
        });
});