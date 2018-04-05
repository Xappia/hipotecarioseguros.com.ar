<!-- Idplan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idplan', 'Idplan:') !!}
    {!! Form::number('idplan', null, ['class' => 'form-control']) !!}
</div>

<!-- Btn1V Field -->
<div class="form-group col-sm-6">
    {!! Form::label('btn1v', 'Btn1V:') !!}
    {!! Form::number('btn1v', null, ['class' => 'form-control']) !!}
</div>

<!-- Btn1C Field -->
<div class="form-group col-sm-6">
    {!! Form::label('btn1c', 'Btn1C:') !!}
    {!! Form::number('btn1c', null, ['class' => 'form-control']) !!}
</div>

<!-- Btn2V Field -->
<div class="form-group col-sm-6">
    {!! Form::label('btn2v', 'Btn2V:') !!}
    {!! Form::number('btn2v', null, ['class' => 'form-control']) !!}
</div>

<!-- Btn2C Field -->
<div class="form-group col-sm-6">
    {!! Form::label('btn2c', 'Btn2C:') !!}
    {!! Form::number('btn2c', null, ['class' => 'form-control']) !!}
</div>

<!-- Btn3V Field -->
<div class="form-group col-sm-6">
    {!! Form::label('btn3v', 'Btn3V:') !!}
    {!! Form::number('btn3v', null, ['class' => 'form-control']) !!}
</div>

<!-- Btn3C Field -->
<div class="form-group col-sm-6">
    {!! Form::label('btn3c', 'Btn3C:') !!}
    {!! Form::number('btn3c', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tplanbuttons.index') !!}" class="btn btn-default">Cancel</a>
</div>
