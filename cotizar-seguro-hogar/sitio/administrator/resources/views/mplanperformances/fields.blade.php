<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Plan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plan', 'Plan:') !!}
    {!! Form::text('plan', null, ['class' => 'form-control']) !!}
</div>

<!-- Planlabel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('planlabel', 'Planlabel:') !!}
    {!! Form::text('planlabel', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Amountplan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amountplan', 'Amountplan:') !!}
    {!! Form::number('amountplan', null, ['class' => 'form-control']) !!}
</div>

<!-- Costdaylabel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costdaylabel', 'Costdaylabel:') !!}
    {!! Form::text('costdaylabel', null, ['class' => 'form-control']) !!}
</div>

<!-- Costday Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costday', 'Costday:') !!}
    {!! Form::number('costday', null, ['class' => 'form-control']) !!}
</div>

<!-- Coverage1Label1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coverage1label1', 'Coverage1Label1:') !!}
    {!! Form::text('coverage1label1', null, ['class' => 'form-control']) !!}
</div>

<!-- Coverage1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coverage1', 'Coverage1:') !!}
    {!! Form::text('coverage1', null, ['class' => 'form-control']) !!}
</div>

<!-- Coverage1Label2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coverage1label2', 'Coverage1Label2:') !!}
    {!! Form::text('coverage1label2', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount1', 'Amount1:') !!}
    {!! Form::number('amount1', null, ['class' => 'form-control']) !!}
</div>

<!-- Coverage2Label1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coverage2label1', 'Coverage2Label1:') !!}
    {!! Form::text('coverage2label1', null, ['class' => 'form-control']) !!}
</div>

<!-- Coverage2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coverage2', 'Coverage2:') !!}
    {!! Form::text('coverage2', null, ['class' => 'form-control']) !!}
</div>

<!-- Coverage2Label2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coverage2label2', 'Coverage2Label2:') !!}
    {!! Form::text('coverage2label2', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount2', 'Amount2:') !!}
    {!! Form::number('amount2', null, ['class' => 'form-control']) !!}
</div>

<!-- Randombutton Field -->
<div class="form-group col-sm-6">
    {!! Form::label('randombutton', 'Randombutton:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('randombutton', false) !!}
        {!! Form::checkbox('randombutton', '1', null) !!} 1
    </label>
</div>

<!-- Buttonlabel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('buttonlabel', 'Buttonlabel:') !!}
    {!! Form::text('buttonlabel', null, ['class' => 'form-control']) !!}
</div>

<!-- Buttonlabel2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('buttonlabel2', 'Buttonlabel2:') !!}
    {!! Form::text('buttonlabel2', null, ['class' => 'form-control']) !!}
</div>

<!-- Buttonlabel3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('buttonlabel3', 'Buttonlabel3:') !!}
    {!! Form::text('buttonlabel3', null, ['class' => 'form-control']) !!}
</div>

<!-- Footlabel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('footlabel', 'Footlabel:') !!}
    {!! Form::text('footlabel', null, ['class' => 'form-control']) !!}
</div>

<!-- Coveragepdf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coveragepdf', 'Coveragepdf:') !!}
    {!! Form::text('coveragepdf', null, ['class' => 'form-control']) !!}
</div>

<!-- Ntimes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ntimes', 'Ntimes:') !!}
    {!! Form::number('ntimes', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mplanperformances.index') !!}" class="btn btn-default">Cancel</a>
</div>
