$(function() {
    $("#next").one("click",function(){

            var opcion = $('input:checkbox[name=checkboxvertical]:checked').val();
            var miObjeto = new Object();
            switch(opcion) {
                case "Los Malbecs cosecha 1886":
                    miObjeto.i1 = 1;
                    miObjeto.i2 = 0; 
                    miObjeto.i3 = 0;
                    miObjeto.i4 = 0;
                    miObjeto.i5 = 0;
                    
                    break;
                case "La heladera con los imanes del delivery":
                    miObjeto.i1 = 0;
                    miObjeto.i2 = 1; 
                    miObjeto.i3 = 0;
                    miObjeto.i4 = 0;
                    miObjeto.i5 = 0;
                    break;
                case "Las vasijas de Machu Pichu":
                    miObjeto.i1 = 0;
                    miObjeto.i2 = 0; 
                    miObjeto.i3 = 1;
                    miObjeto.i4 = 0;
                    miObjeto.i5 = 0; 
                    break;
                case "Nada":
                    miObjeto.i1 = 0;
                    miObjeto.i2 = 0; 
                    miObjeto.i3 = 0;
                    miObjeto.i4 = 1;
                    miObjeto.i5 = 0;
                    break;
                case "Todas":
                    miObjeto.i1 = 0;
                    miObjeto.i2 = 0; 
                    miObjeto.i3 = 0;
                    miObjeto.i4 = 0;
                    miObjeto.i5 = 1;
                    break;
                default:
                    
            }
            

            if(opcion != undefined){
              var myString = JSON.stringify(miObjeto);
              //alert(myString);
            }
			
			call_receive_question(myString,"pregunta-13");
             
             var preguntas = new Object();
            preguntas = JSON.parse(localStorage.getItem("preguntas")); 
            preguntas.p13 = miObjeto;

            console.log(preguntas);

            localStorage.setItem("preguntas", JSON.stringify(preguntas));
            //alert(JSON.stringify(preguntas));
      
        });
});