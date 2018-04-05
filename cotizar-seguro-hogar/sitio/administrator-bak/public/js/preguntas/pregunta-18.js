$(function() {
     $("#next").click(function(){
            var opcion = $('input:radio[name=radiohorizontal]:checked').val();
            var miObjeto = new Object();
            switch(opcion) {
                case "Doble puerta":
                    miObjeto.i1 = 1;
                    miObjeto.i2 = 0; 
                    miObjeto.i3 = 0;
                    break;
                case "Mediana":
                    miObjeto.i1 = 0;
                    miObjeto.i2 = 1;
                    miObjeto.i3 = 0;
                    break;
                case "Compacta":
                    miObjeto.i1 = 0;
                    miObjeto.i2 = 0;
                    miObjeto.i3 = 1;
                    break;
                default:
                    
            }
            

            if(opcion != undefined){
              var myString = JSON.stringify(miObjeto);
              alert(myString);
            }
             
             var preguntas = new Object();
            preguntas = JSON.parse(localStorage.getItem("preguntas")); 
            preguntas.p18 = miObjeto;

            console.log(preguntas);

            localStorage.setItem("preguntas", JSON.stringify(preguntas));
            alert(JSON.stringify(preguntas));
      
        });
});