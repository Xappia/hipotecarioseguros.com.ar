$(function() {
    $("#next").one("click",function(){
            var opcion = $('input:radio[name=radiohorizontal]:checked').val();
			var AditionalArgument;
            var miObjeto = new Object();
            switch(opcion) {
                case "departamento":
                    miObjeto.i1 = 1;
                    miObjeto.i2 = 0;
					AditionalArgument = "DEPARTAMENTO";
                    break;
                case "casa":
                    miObjeto.i1 = 0;
                    miObjeto.i2 = 1;
					AditionalArgument = "CASA";
                    break;
                default:
                    
            }
            

            if(opcion != undefined){
              var myString = JSON.stringify(miObjeto);
              //alert(myString);
            }
			
			call_receive_question(myString,"pregunta-3",AditionalArgument);
             
            var preguntas = new Object();
            preguntas = JSON.parse(localStorage.getItem("preguntas")); 
            preguntas.p3 = miObjeto;

            console.log(preguntas);

            localStorage.setItem("preguntas", JSON.stringify(preguntas));

             //alert(JSON.stringify(preguntas));
            
      
        });
});