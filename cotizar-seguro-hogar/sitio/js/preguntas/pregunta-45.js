$(function() {
    $("#next").one("click",function(){

            var opcion = $('input:checkbox[name=checkboxvertical]:checked').val();
            var miObjeto = new Object();
            switch(opcion) {
                case "Scalextric":
                    miObjeto.i1 = 1;
                    miObjeto.i2 = 0; 
                    miObjeto.i3 = 0;
                    miObjeto.i4 = 0;
                    miObjeto.i5 = 0;
                    
                    break;
                case "bici":
                    miObjeto.i1 = 0;
                    miObjeto.i2 = 1; 
                    miObjeto.i3 = 0;
                    miObjeto.i4 = 0;
                    miObjeto.i5 = 0;
                    break;
                case "camping":
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
                case "Todos":
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
			
			call_receive_question(myString,"pregunta-45");
             
             var preguntas = new Object();
            preguntas = JSON.parse(localStorage.getItem("preguntas")); 
            preguntas.p45 = miObjeto;

            console.log(preguntas);

            localStorage.setItem("preguntas", JSON.stringify(preguntas));
            //alert(JSON.stringify(preguntas));
            
      
        });
});