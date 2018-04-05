<!-- Formtype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('formtype', 'Formtype:') !!}
    {!! Form::text('formtype', null, ['class' => 'form-control']) !!}
</div>

<!-- Nshow Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nshow', 'Nshow:') !!}
    {!! Form::number('nshow', null, ['class' => 'form-control']) !!}
</div>

<!-- Nfilled Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nfilled', 'Nfilled:') !!}
    {!! Form::number('nfilled', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mforms.index') !!}" class="btn btn-default">Cancel</a>
</div>
