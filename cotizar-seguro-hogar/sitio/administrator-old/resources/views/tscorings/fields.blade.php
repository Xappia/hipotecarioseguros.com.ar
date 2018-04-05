<!-- Idquestion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idquestion', 'Pregunta:') !!}
    <!-- {!! Form::select('idquestion', $mquestion, ['class' => 'form-control', 'readonly']) !!} -->
    {!! Form::text('idquestion', $mquestion[$tscoring->idquestion], ['class' => 'form-control', 'readonly']) !!}
</div>

<!-- Optionquestion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('optionquestion', 'Opción:') !!}
    {!! Form::text('optionquestion', null, ['class' => 'form-control', 'readonly']) !!}
</div>

<!-- Descriptionquestion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descriptionquestion', 'Descripción:') !!}
    {!! Form::text('descriptionquestion', null, ['class' => 'form-control', 'readonly']) !!}
</div>

<!-- Rccscore Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rccscore', 'RCC Score:') !!}
    {!! Form::number('rccscore', null, ['class' => 'form-control']) !!}
</div>

<!-- Rcmscore Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rcmscore', 'RCM Score:') !!}
    {!! Form::number('rcmscore', null, ['class' => 'form-control']) !!}
</div>

<!-- Rcbscore Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rcbscore', 'RCB Score:') !!}
    {!! Form::number('rcbscore', null, ['class' => 'form-control']) !!}
</div>

<!-- Trecscore Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trecscore', 'TREC Score:') !!}
    {!! Form::number('trecscore', null, ['class' => 'form-control']) !!}
</div>

<!-- Tremscore Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tremscore', 'TREM Score:') !!}
    {!! Form::number('tremscore', null, ['class' => 'form-control']) !!}
</div>

<!-- Trebscore Field -->
<div class="form-group col-sm-6">
    {!! Form::label('trebscore', 'TREB Score:') !!}
    {!! Form::number('trebscore', null, ['class' => 'form-control']) !!}
</div>

<!-- Ntimes Field
<div class="form-group col-sm-6">
    {!! Form::label('ntimes', 'Nro. Veces:') !!}
    {!! Form::number('ntimes', null, ['class' => 'form-control']) !!}
</div> -->

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tscorings.index') !!}" class="btn btn-default">Cancelar</a>
</div>
