<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Tipo:') !!}
    <!-- {!! Form::text('type', null, ['class' => 'form-control']) !!} -->
    {!! Form::select('type', array('RCB' => 'RCB', 'RCM' => 'RCM', 'RCC' => 'RCC','TREB' => 'TREB', 'TREM' => 'TREM', 'TREC' => 'TREC')) !!}
</div>

<!-- Planlabel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('planlabel', 'Literal del Plan:') !!}
    {!! Form::text('planlabel', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Plan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plan', 'Plan:') !!}
    <!-- {!! Form::text('plan', null, ['class' => 'form-control']) !!} -->
    {!! Form::select('plan', array('ROBO HURTO DE CONTENIDO' => 'ROBO HURTO DE CONTENIDO', 'TODO RIESGO ELECTRO' => 'TODO RIESGO ELECTRO')) !!}    
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Imagen:') !!}
    {!! Form::text('image',null, ['class' => 'form-control', 'readonly']) !!}
    {!! Form::file('image1', null, ['id' => 'image1','name' => 'image1', 'class' => 'form-control']) !!}
</div>

<!-- Amountplan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amountplan', 'Monto del plan:') !!}
    {!! Form::number('amountplan', null, ['class' => 'form-control', 'required','step'=>'any']) !!}
</div>

<!-- costdaylabel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costdaylabel', 'Literal Costo/Día:') !!}
    {!! Form::text('costdaylabel', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Costday Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costday', 'Costo/Día:') !!}
    {!! Form::number('costday', null, ['class' => 'form-control', 'required','step'=>'any']) !!}
</div>

<!-- coverage1label1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coverage1label1', 'Literal 1 Cobertura 1:') !!}
    {!! Form::text('coverage1label1', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- coverage1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coverage1', 'Cobertura 1:') !!}
    {!! Form::text('coverage1', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- coverage1label2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coverage1label2', 'Literal 2 Cobertura 1:') !!}
    {!! Form::text('coverage1label2', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Amount1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount1', 'Monto 1:') !!}
    {!! Form::number('amount1', null, ['class' => 'form-control', 'required','step'=>'any']) !!}
</div>

<!-- Coverage2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coverage2', 'Cobertura 2:') !!}
    {!! Form::text('coverage2', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- coverage2label2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coverage2label2', 'Literal 2 Cobertura 2:') !!}
    {!! Form::text('coverage2label2', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Amount2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount2', 'Monto 2:') !!}
    {!! Form::number('amount2', null, ['class' => 'form-control', 'required','step'=>'any']) !!}
</div>

<!-- randombutton Field -->
<div class="form-group col-sm-6">
    {!! Form::label('randombutton', 'Botón aleatorio:') !!}
    {!! Form::select('randombutton', array(0 => 'No', 1 => 'Si')) !!}
</div>

<!-- buttonlabel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('buttonlabel', 'Literal Botón 1:') !!}
    {!! Form::text('buttonlabel', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- buttonlabel2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('buttonlabel2', 'Literal Botón 2:') !!}
    {!! Form::text('buttonlabel2', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- buttonlabel3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('buttonlabel3', 'Literal Botón 3:') !!}
    {!! Form::text('buttonlabel3', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- footlabel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('footlabel', 'Literal Pié de Página:') !!}
    {!! Form::text('footlabel', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('coveragepdf', 'Subir PDF cobertura:') !!}
    {!! Form::text('coveragepdf',null, ['class' => 'form-control', 'readonly']) !!}
    {!! Form::file('coveragepdf1', null, ['id' => 'coveragepdf1','name' => 'coveragepdf1', 'class' => 'form-control']) !!}
</div>

<!-- coverage2label1 Field
<div class="form-group col-sm-6">
    {!! Form::label('coverage2label1', 'Literal 1 Cobertura 2:') !!}
    {!! Form::text('coverage2label1', null, ['class' => 'form-control']) !!}
</div>  -->

<table class="table table-responsive" id="mcoverage-table">
    <thead>
        <tr>
        <th>Cobertuta</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mincludeplans as $mincludeplan)
            <?php
                if ($mincludeplan->idplan == $mplannew->id) {
            ?>
                <tr>
                    <td>{!! $mincludeplan->coverage !!}</td>
                </tr>
            <?php
            }
            ?>
        @endforeach
    </tbody>
</table>

<!-- Planes y Coberturas -->
<div class="form-group col-sm-6">
    <?php
        $planLink = '../../planview.php?idplan=' . $mplannew->id
    ?>    
    <a class="btn" href="{{ url($planLink)}}" target="_blank">Ver Plan - Front End</a>

    <?php
        $coverageLink = '../../coverageview.php?idplan=' . $mplannew->id
    ?>    
    <a class="btn" href="{{ url($coverageLink)}}" target="_blank">Ver Cobertura - Front End</a>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mplannews.index') !!}" class="btn btn-default">Cancelar</a>
</div>

<script type="text/javascript">
$(document).ready(function(){
    
    $('[name="image1"]').on('change', function() {
      document.getElementById("image").value = $('[name="image1"]').val().split('\\').pop();
    }); 
    
    $('[name="coveragepdf1"]').on('change', function() {
      document.getElementById("coveragepdf").value = $('[name="coveragepdf1"]').val().split('\\').pop();
    }); 

    
});


</script>