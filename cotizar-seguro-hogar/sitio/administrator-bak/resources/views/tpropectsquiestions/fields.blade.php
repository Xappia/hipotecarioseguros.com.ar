<!-- Idprospect Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idprospect', 'Prospecto:') !!}
    {!! Form::number('idprospect', null, ['class' => 'form-control']) !!}
</div>

<!-- Idquestion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idquestion', 'Pregunta:') !!}
    {!! Form::number('idquestion', null, ['class' => 'form-control']) !!}
</div>

<!-- Optionquestion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('optionquestion', 'Opción:') !!}
    {!! Form::text('optionquestion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tpropectsquiestions.index') !!}" class="btn btn-default">Cancelar</a>
</div>
