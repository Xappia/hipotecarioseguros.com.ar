$(function() {
    $("#next").one("click",function(){

            var opcion = $('input:radio[name=radiohorizontal]:checked').val();
            var miObjeto = new Object();
            switch(opcion) {
                case "Robo":
                    miObjeto.i1 = 1;
                    miObjeto.i2 = 0; 
                   
                    
                    
                    break;
                case "Incendio":
                    miObjeto.i1 = 0;
                    miObjeto.i2 = 1; 
                   
                   
                    break;
                
            
                default:
                    
            }
        

            if(opcion != undefined){
              var myString = JSON.stringify(miObjeto);
              //alert(myString);
            }
			
			call_receive_question(myString,"pregunta-47");
             
             var preguntas = new Object();
            preguntas = JSON.parse(localStorage.getItem("preguntas")); 
            preguntas.p47 = miObjeto;

            console.log(preguntas);

            localStorage.setItem("preguntas", JSON.stringify(preguntas));
            //alert(JSON.stringify(preguntas));
      
        });
});