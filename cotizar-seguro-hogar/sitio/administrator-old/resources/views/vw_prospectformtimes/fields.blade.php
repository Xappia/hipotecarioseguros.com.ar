<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Formtype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('formtype', 'Formtype:') !!}
    {!! Form::text('formtype', null, ['class' => 'form-control']) !!}
</div>

<!-- Ntimes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ntimes', 'Ntimes:') !!}
    {!! Form::number('ntimes', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('vwProspectformtimes.index') !!}" class="btn btn-default">Cancel</a>
</div>
