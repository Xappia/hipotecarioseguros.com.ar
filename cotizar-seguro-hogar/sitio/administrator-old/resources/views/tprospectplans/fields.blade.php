<!-- Idplan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idplan', 'Id Plan:') !!}
    {!! Form::number('idplan', null, ['class' => 'form-control']) !!}
</div>

<!-- Jsonscore Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jsonscore', 'Json Score:') !!}
    {!! Form::text('jsonscore', null, ['class' => 'form-control']) !!}
</div>

<!-- Score Field -->
<div class="form-group col-sm-6">
    {!! Form::label('score', 'Score:') !!}
    {!! Form::number('score', null, ['class' => 'form-control']) !!}
</div>

<!-- Answerdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('answerdate', 'Fecha Respuesta:') !!}
    {!! Form::date('answerdate', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount1', 'Monto 1:') !!}
    {!! Form::number('amount1', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount2', 'Monto 2:') !!}
    {!! Form::number('amount2', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount3', 'Monto 3:') !!}
    {!! Form::number('amount3', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount4', 'Monto 4:') !!}
    {!! Form::number('amount4', null, ['class' => 'form-control']) !!}
</div>

<!-- Coverage1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coverage1', 'Cobertura 1:') !!}
    {!! Form::text('coverage1', null, ['class' => 'form-control']) !!}
</div>

<!-- Coverage2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coverage2', 'Cobertura 2:') !!}
    {!! Form::text('coverage2', null, ['class' => 'form-control']) !!}
</div>

<!-- Coverage3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coverage3', 'Cobertura 3:') !!}
    {!! Form::text('coverage3', null, ['class' => 'form-control']) !!}
</div>

<!-- Coverage4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coverage4', 'Cobertura 4:') !!}
    {!! Form::text('coverage4', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tprospectplans.index') !!}" class="btn btn-default">Cancelar</a>
</div>
