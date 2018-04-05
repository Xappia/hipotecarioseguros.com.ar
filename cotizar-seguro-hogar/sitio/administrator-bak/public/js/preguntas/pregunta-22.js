$(function() {
    $("#next").click(function(){
            var opcion = localStorage.getItem("Value");
            var miObjeto = new Object();
            miObjeto.i1 = opcion;
            
            var myString = JSON.stringify(miObjeto);
            alert(myString);  

             var preguntas = new Object();
            preguntas = JSON.parse(localStorage.getItem("preguntas")); 
            preguntas.p22 = miObjeto;

            console.log(preguntas);

            localStorage.setItem("preguntas", JSON.stringify(preguntas));

            alert(JSON.stringify(preguntas));
      
        });
});