
<div class=" container form-group">
    

<!-- DependentQuestion Field -->
<div class=" row">
    <div class="col-sm-6">
        {!! Form::label('question', 'Pregunta:') !!}
        {!! Form::text('question', null, ['class' => 'form-control', 'readonly']) !!}
    </div>

    <?php
      switch( $mquestion->type ) {
        case 1: $type = 'Selección única'; break;
        case 2: $type = 'Selección multiple'; break;
        case 3: $type = 'Ordenamiento'; break;
        case 4: $type = 'Valor único'; break;
    }
    ?>

    <div class=" col-sm-6">
        {!! Form::label('type', 'Tipo:') !!}
        {!! Form::label('type1', $type, ['class' => 'form-control']) !!}
        <!--{!! Form::text('type', $type, ['class' => 'form-control', 'readonly']) !!} -->
        {!! Form::hidden('type',null, ['class' => 'form-control', 'readonly']) !!}
    </div>
</div>
<br>
<!-- Description Field -->
<div class=" row">
    <div class="col-sm-6">
        {!! Form::label('description', 'Descripción de la Pregunta:') !!}
        {!! Form::text('description', null, ['class' => 'form-control', 'required']) !!}
    </div>
</div>
<br>
<div class=" row">
    <div class=" col-sm-6">
        {!! Form::label('dependentquestion', 'Pregunta dependiente:') !!}
        {!! Form::select('dependentquestion', array(0 => 'Ninguna', 1 => '¿Con quién vivís?', 2 => '¿Con Quién te identificas más?', 3 => '¿Dónde vivís?', 4 => 'Cuando se trata de proteger lo que más querés ¿Qué es lo que más te preocupa?')) !!}		
    </div>
    <div class=" col-sm-6">
        <label for="dependentanswer">Respuesta dependiente:</label>
        <select id="dependentanswer" name="dependentanswer" >
            <option value="" selected="selected">Ninguna</option>
        </select>
        {!! Form::hidden('dependentanswer',null, ['id' => 'dependentanswerBD','name' => 'dependentanswerBD','class' => 'form-control', 'readonly']) !!}


    </div>
</div>
<br>
<div class=" row">
    <div class=" col-sm-6">
        {!! Form::label('phpfile', 'Página de la pregunta php:') !!}
        {!! Form::text('phpfile',null, ['class' => 'form-control', 'readonly']) !!}
        {!! Form::file('phpfile1', null, ['id' => 'phpfile1','name' => 'phpfile1', 'class' => 'form-control']) !!}
    </div>


    <div class=" col-sm-6">
        {!! Form::label('highlight', 'Habilitada?') !!}
        <!--{!! Form::number('highlight', null, ['class' => 'form-control']) !!}-->
        {!! Form::select('highlight', array(0 => 'No', 1 => 'Si')) !!}
    </div>
</div>
<br>
<div class=" row">
    
    <?php
        if ($mquestion->id > 4) {
    ?>
        <!-- Category Field -->
        <div class=" col-sm-6">
            {!! Form::label('type', 'Categoría:') !!}
            <!--{!! Form::number('type', null, ['class' => 'form-control']) !!}-->
            {!! Form::select('category', array(1 => 'Todas', 2 => 'Robo', 3 => 'Electrodomésticos')) !!}
        </div>
    <?php
    }
    ?>
</div>
<br>
<div class=" row">
<!-- Submit Field -->
    <div class=" col-sm-12">
        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('mquestions.index') !!}" class="btn btn-default">Cancelar</a>
    </div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$('#dependentquestion').on('change', function() {
	  Functiondependent();
	});
	
	$('[name="phpfile1"]').on('change', function() {
	  document.getElementById("phpfile").value = $('[name="phpfile1"]').val().split('\\').pop();
	});	
	
	
	var dependentquestion = document.getElementById("dependentquestion").value;
	
	if(dependentquestion != 0)
	{
		Functiondependent();
		valuehidde = document.getElementById("dependentanswerBD").value;
		
		document.getElementById("dependentanswer").value = valuehidde;
	}
});

function Functiondependent() {

    var dependentquestion = document.getElementById("dependentquestion").value;
    var dependentanswer = document.getElementById("dependentanswer");
    
    document.getElementById('dependentanswer').options.length = 0;
    
    if(dependentquestion == 0)
    {
        var option = document.createElement("option");
        option.text = "Ninguna";
        option.value = "";
        dependentanswer.add(option);    
    }
    
    if(dependentquestion == 1) //Pregunta 1
    {
        var option = document.createElement("option");
        option.text = "Solo.";
        option.value = "SOLO";
        dependentanswer.add(option);
        
        var option1 = document.createElement("option");
        option1.text = "Sola.";
        option1.value = "SOLA";
        dependentanswer.add(option1);   

        var option2 = document.createElement("option");
        option2.text = "En pareja.";
        option2.value = "PAREJA";
        dependentanswer.add(option2);   
        
        var option3 = document.createElement("option");
        option3.text = "Con mi familia.";
        option3.value = "FAMILIA";
        dependentanswer.add(option3);   
        
    }
    
    if(dependentquestion == 2) //Pregunta 2
    {
        var option = document.createElement("option");
        option.text = "Hombre - Fana de Pókemon (-35)";
        option.value = "HOMBRE";
        dependentanswer.add(option);
        
        var option1 = document.createElement("option");
        option1.text = "Hombre - Más de la época de Mazinger Z. (+35)";
        option1.value = "HOMBRE";
        dependentanswer.add(option1);   

        var option2 = document.createElement("option");
        option2.text = "Mujer - Fana de Sailor Moon. (-35)";
        option2.value = "MUJER";
        dependentanswer.add(option2);   
        
        var option3 = document.createElement("option");
        option3.text = "Mujer - Esperaba a Heidi todas las meriendas. (+35)";
        option3.value = "MUJER";
        dependentanswer.add(option3);   
        
    }   
    
    if(dependentquestion == 3) //Pregunta 3
    {
        var option = document.createElement("option");
        option.text = "En un Departamento.";
        option.value = "DEPARTAMENTO";
        dependentanswer.add(option);
        
        var option1 = document.createElement("option");
        option1.text = "En una Casa.";
        option1.value = "CASA";
        dependentanswer.add(option1);   
        
    }   

    if(dependentquestion == 4) //Pregunta 4
    {
        var option = document.createElement("option");
        option.text = " Incendio.";
        option.value = "INCENDIO";
        dependentanswer.add(option);
        
        var option1 = document.createElement("option");
        option1.text = "Robo.";
        option1.value = "ROBO";
        dependentanswer.add(option1);   

        var option2 = document.createElement("option");
        option2.text = "Granizo.";
        option2.value = "GRANIZO";
        dependentanswer.add(option2);   
        
        var option3 = document.createElement("option");
        option3.text = "Tus electrodomésticos / Tecnología";
        option3.value = "ELECTRODOMESTICOS";
        dependentanswer.add(option3);       
        
    }       
}
</script>


