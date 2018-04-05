$(function() {
     $("#next").click(function(){

            var opcion = $('input:checkbox[name=checkboxvertical]:checked').val();
            var miObjeto = new Object();
            switch(opcion) {
                case "Las pantuflas de oso":
                    miObjeto.i1 = 1;
                    miObjeto.i2 = 0; 
                    miObjeto.i3 = 0;
                    miObjeto.i4 = 0;
                    miObjeto.i5 = 0;
                    
                    break;
                case "El radio despertador bluetooth":
                    miObjeto.i1 = 0;
                    miObjeto.i2 = 1; 
                    miObjeto.i3 = 0;
                    miObjeto.i4 = 0;
                    miObjeto.i5 = 0;
                    break;
                case "Tu sommier de espuma de alta densidad":
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
              alert(myString);
            }
             
             var preguntas = new Object();
            preguntas = JSON.parse(localStorage.getItem("preguntas")); 
            preguntas.p11 = miObjeto;

            console.log(preguntas);

            localStorage.setItem("preguntas", JSON.stringify(preguntas));

            alert(JSON.stringify(preguntas));
      
        });
});