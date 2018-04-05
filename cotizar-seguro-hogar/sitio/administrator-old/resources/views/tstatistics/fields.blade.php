<!-- Jsonscore Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jsonscore', 'Jsonscore:') !!}
    {!! Form::text('jsonscore', null, ['class' => 'form-control']) !!}
</div>

<!-- Answerdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('answerdate', 'Answerdate:') !!}
    {!! Form::date('answerdate', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tstatistics.index') !!}" class="btn btn-default">Cancel</a>
</div>
