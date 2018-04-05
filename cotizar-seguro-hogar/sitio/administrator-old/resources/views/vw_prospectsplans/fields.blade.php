<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Lastname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastname', 'Lastname:') !!}
    {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Vw Prospectsplanscol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vw_prospectsplanscol', 'Vw Prospectsplanscol:') !!}
    {!! Form::text('vw_prospectsplanscol', null, ['class' => 'form-control']) !!}
</div>

<!-- Amountplan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amountplan', 'Amountplan:') !!}
    {!! Form::number('amountplan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('vwProspectsplans.index') !!}" class="btn btn-default">Cancel</a>
</div>
