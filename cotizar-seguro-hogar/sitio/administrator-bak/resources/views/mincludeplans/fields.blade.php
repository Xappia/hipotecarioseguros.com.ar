<!-- Idplan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idplan', 'Plan:') !!}
    {!! Form::select('idplan', $mplannews, ['class' => 'form-control']) !!}
    <!-- {!! Form::select('idplan', $mplannews, ['class' => 'form-control']) !!}
    {!! Form::hidden('idplan', null, ['class' => 'form-control']) !!}
    {!! Form::text('idplanx', $mplannews[$mincludeplan->idplan], ['class' => 'form-control', 'readonly']) !!} -->
</div>

<!-- Coverage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coverage', 'Cobertura:') !!}
    {!! Form::text('coverage', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Monto:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control', 'step'=>'any']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mincludeplans.index') !!}" class="btn btn-default">Cancelar</a>
</div>
