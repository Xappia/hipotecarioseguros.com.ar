$(function() {
    $("#next").click(function(){
            var preguntas = new Object();  
            preguntas.p1 = new Object();
            preguntas.p2 = new Object();
            preguntas.p3 = new Object();
            preguntas.p4 = new Object();
            preguntas.p5 = new Object();
            preguntas.p6 = new Object();
            preguntas.p7 = new Object();
            preguntas.p8 = new Object();
            preguntas.p9 = new Object();
            preguntas.p10 = new Object();
            preguntas.p11 = new Object();
            preguntas.p12 = new Object();
            preguntas.p13 = new Object();
            preguntas.p14 = new Object();
            preguntas.p15 = new Object();
            preguntas.p16 = new Object();
            preguntas.p17 = new Object();
            preguntas.p18 = new Object();
            preguntas.p19 = new Object();
            preguntas.p20 = new Object();
            preguntas.p21 = new Object();
            preguntas.p22 = new Object();
            preguntas.p23 = new Object();
            preguntas.p24 = new Object();
            preguntas.p25 = new Object();

            console.log(preguntas);

            localStorage.setItem("preguntas", JSON.stringify(preguntas));

            alert(JSON.stringify(preguntas));

      });
});

