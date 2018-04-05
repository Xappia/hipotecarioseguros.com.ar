$(function() {
    $("#next").click(function(){
            var opcion = $('input:radio[name=vivis]:checked').val();
            var miObjeto = new Object();
            switch(opcion) {
                case "solo":
                    miObjeto.i1 = 1;
                    miObjeto.i2 = 0;
                    miObjeto.i3 = 0;
                    miObjeto.i4 = 0;
                    break;
                case "sola":
                    miObjeto.i1 = 0;
                    miObjeto.i2 = 1;
                    miObjeto.i3 = 0;
                    miObjeto.i4 = 0;
                    break;
                case "pareja":
                    miObjeto.i1 = 0;
                    miObjeto.i2 = 0;
                    miObjeto.i3 = 1;
                    miObjeto.i4 = 0;
                    break;
                case "familia":
                    miObjeto.i1 = 0;
                    miObjeto.i2 = 0;
                    miObjeto.i3 = 0;
                    miObjeto.i4 = 1;
                    break;
                default:
                    
            }
            

            if(opcion != undefined){
              var myString = JSON.stringify(miObjeto);
              //alert(myString);
            }
			
			call_receive_question(myString,"pregunta-1");
             
            var preguntas = new Object();
            preguntas = JSON.parse(localStorage.getItem("preguntas")); 
            preguntas.p1 = miObjeto;

            console.log(preguntas);
			
			var dataString = JSON.stringify(preguntas);
			
			

            localStorage.setItem("preguntas", JSON.stringify(preguntas));

             //alert(JSON.stringify(preguntas));
      
        });
});