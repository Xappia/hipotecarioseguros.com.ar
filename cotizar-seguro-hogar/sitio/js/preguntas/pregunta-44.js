$(function() {
    $("#next").one("click",function(){
            var miObjeto = new Object();
            var i = 1;
            if ($('#c1').prop('checked') ) {
              miObjeto.i1 = 1;
            }else{
              miObjeto.i1 = 0;
            }
            

            if ($('#c2').prop('checked') ) {
              miObjeto.i2 = 1;
            }else{
              miObjeto.i2 = 0;
            }

            if ($('#c3').prop('checked') ) {
              miObjeto.i3 = 1;
            }else{
              miObjeto.i3 = 0;
            }

            if ($('#c4').prop('checked') ) {
              miObjeto.i4 = 1;
            }else{
              miObjeto.i4 = 0;
            }

            if ($('#c5').prop('checked') ) {
              miObjeto.i5 = 1;
            }else{
              miObjeto.i5 = 0;
            }

            if ($('#c6').prop('checked') ) {
              miObjeto.i6 = 1;
            }else{
              miObjeto.i6 = 0;
            }

            if ($('#c7').prop('checked') ) {
              miObjeto.i7 = 1;
            }else{
              miObjeto.i7 = 0;
            }
 
            if ($('#c8').prop('checked') ) {
              miObjeto.i8 = 1;
            }else{
              miObjeto.i8 = 0;
            }

            if ($('#c9').prop('checked') ) {
              miObjeto.i9 = 1;
            }else{
              miObjeto.i9 = 0;
            }

            if ($('#c12').prop('checked') ) {
              miObjeto.i10 = 1;
            }else{
              miObjeto.i10 = 0;
            }

            if ($('#c13').prop('checked') ) {
              miObjeto.i11 = 1;
            }else{
              miObjeto.i11 = 0;
            }

            if ($('#c14').prop('checked') ) {
              miObjeto.i12 = 1;
            }else{
              miObjeto.i12 = 0;
            }

            if ($('#c15').prop('checked') ) {
              miObjeto.i13 = 1;
            }else{
              miObjeto.i13 = 0;
            }

            if ($('#c16').prop('checked') ) {
              miObjeto.i14 = 1;
            }else{
              miObjeto.i14 = 0;
            }

            if ($('#c17').prop('checked') ) {
              miObjeto.i15 = 1;
            }else{
              miObjeto.i15 = 0;
            }

            if ($('#c18').prop('checked') ) {
              miObjeto.i16 = 1;
            }else{
              miObjeto.i16 = 0;
            }

            if ($('#c19').prop('checked') ) {
              miObjeto.i17 = 1;
            }else{
              miObjeto.i17 = 0;
            }

            if ($('#c20').prop('checked') ) {
              miObjeto.i18 = 1;
            }else{
              miObjeto.i18 = 0;
            }

            if ($('#c21').prop('checked') ) {
              miObjeto.i19 = 1;
            }else{
              miObjeto.i19 = 0;
            }

            if ($('#c22').prop('checked') ) {
              miObjeto.i20 = 1;
            }else{
              miObjeto.i20 = 0;
            }

            if ($('#c23').prop('checked') ) {
              miObjeto.i21 = 1;
            }else{
              miObjeto.i21 = 0;
            }

            

            var myString = JSON.stringify(miObjeto);
            //alert(myString);
			
			call_receive_question(myString,"pregunta-44");

             var preguntas = new Object();
            preguntas = JSON.parse(localStorage.getItem("preguntas")); 
            preguntas.p44 = miObjeto;

            console.log(preguntas);

            localStorage.setItem("preguntas", JSON.stringify(preguntas));
            //alert(JSON.stringify(preguntas));
      
        });

});