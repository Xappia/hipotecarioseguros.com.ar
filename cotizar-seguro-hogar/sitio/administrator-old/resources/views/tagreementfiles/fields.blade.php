<!-- Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('path', 'Ruta:') !!}
    {!! Form::text('path', null, ['class' => 'form-control']) !!}
</div>

<!-- Filename Field -->
<div class="form-group col-sm-6">
    <!-- {!! Form::label('filename', 'Archivo:') !!} -->
    <!-- {!! Form::text('filename', null, ['class' => 'form-control']) !!} -->
    <!-- {!! Form::file('filename', null, ['class' => 'form-control', 'required']) !!} -->
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tagreementfiles.index') !!}" class="btn btn-default">Cancelar</a>
</div>
