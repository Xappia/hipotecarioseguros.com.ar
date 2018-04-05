$(function() {
    $("#next").one("click",function(){
            var miObjeto = new Object();
            var i = 1;
            $('ul li').each(function(indice, elemento) {
              //console.log('El elemento con el índice '+indice+' contiene '+$(elemento));
              var objeto = $(elemento);
              console.log(objeto[0].value);
               switch(i) {
                case 1:
                    miObjeto.i1 = objeto[0].value;
                    break;
                case 2:
                    miObjeto.i2 = objeto[0].value;
                    break;
                case 3:
                    miObjeto.i3 = objeto[0].value;
                    break;
                case 4:
                    miObjeto.i4 = objeto[0].value;
                    break;
                case 5:
                    miObjeto.i5 = objeto[0].value;
                    break;
                default:
                    
                }
                i++;
            });


            var myString = JSON.stringify(miObjeto);
            //alert(myString);
			
			call_receive_question(myString,"pregunta-46");

             var preguntas = new Object();
            preguntas = JSON.parse(localStorage.getItem("preguntas")); 
            preguntas.p46 = miObjeto;

            console.log(preguntas);

            localStorage.setItem("preguntas", JSON.stringify(preguntas));
            ///alert(JSON.stringify(preguntas));
      
        });

});