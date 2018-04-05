<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $mplannew->id !!}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Tipo:') !!}
    <p>{!! $mplannew->type !!}</p>
</div>

<!-- Planlabel Field -->
<div class="form-group">
    {!! Form::label('planlabel', 'Literal del Plan:') !!}
    <p>{!! $mplannew->planlabel !!}</p>
</div>

<!-- Plan Field -->
<div class="form-group">
    {!! Form::label('plan', 'Plan:') !!}
    <p>{!! $mplannew->plan !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Imagen:') !!}
    <p>{!! $mplannew->image !!}</p>
</div>

<!-- Amountplan Field -->
<div class="form-group">
    {!! Form::label('amountplan', 'Monto del Plan:') !!}
    <p>{!! $mplannew->amountplan !!}</p>
</div>

<!-- costdaylabel Field -->
<div class="form-group">
    {!! Form::label('costdaylabel', 'Literal Costo/Día:') !!}
    <p>{!! $mplannew->costdaylabel !!}</p>
</div>

<!-- Costday Field -->
<div class="form-group">
    {!! Form::label('costday', 'Costo/Día:') !!}
    <p>{!! $mplannew->costday !!}</p>
</div>

<!-- coverage1label1 Field -->
<div class="form-group">
    {!! Form::label('coverage1label1', 'Literal 1 Cobertura 1:') !!}
    <p>{!! $mplannew->coverage1label1 !!}</p>
</div>

<!-- Coverage1 Field -->
<div class="form-group">
    {!! Form::label('coverage1', 'Cobertura 1:') !!}
    <p>{!! $mplannew->coverage1 !!}</p>
</div>

<!-- coverage1label2 Field -->
<div class="form-group">
    {!! Form::label('coverage1label2', 'Literal 2 Cobertura 1:') !!}
    <p>{!! $mplannew->coverage1label2 !!}</p>
</div>

<!-- Amount1 Field -->
<div class="form-group">
    {!! Form::label('amount1', 'Monto1:') !!}
    <p>{!! $mplannew->amount1 !!}</p>
</div>

<!-- coverage2label1 Field -->
<div class="form-group">
    {!! Form::label('coverage2label1', 'Literal 1 Cobertura 2:') !!}
    <p>{!! $mplannew->coverage1label1 !!}</p>
</div>

<!-- Coverage2 Field -->
<div class="form-group">
    {!! Form::label('coverage2', 'Cobertura 2:') !!}
    <p>{!! $mplannew->coverage2 !!}</p>
</div>

<!-- coverage2label2 Field -->
<div class="form-group">
    {!! Form::label('coverage2label2', 'Literal 2 Cobertura 2:') !!}
    <p>{!! $mplannew->coverage2label2 !!}</p>
</div>

<!-- Amount2 Field -->
<div class="form-group">
    {!! Form::label('amount2', 'Monto2:') !!}
    <p>{!! $mplannew->amount2 !!}</p>
</div>

<!-- randombutton Field -->

<?php
      switch( $mquestion->randombutton ) {
        case 0: $randombutton = 'No'; break;
        case 1: $randombutton = 'Si'; break;
    }
?>
<div class="form-group">
    {!! Form::label('randombutton', 'Botón aleatorio:') !!}
        <p>{!! $randombutton !!}</p>
</div>

<!-- buttonlabel Field -->
<div class="form-group">
    {!! Form::label('buttonlabel', 'Literal Botón 1:') !!}
    <p>{!! $mplannew->buttonlabel !!}</p>
</div>

<!-- buttonlabel2 Field -->
<div class="form-group">
    {!! Form::label('buttonlabel2', 'Literal Botón 2:') !!}
    <p>{!! $mplannew->buttonlabel2 !!}</p>
</div>

<!-- buttonlabel3 Field -->
<div class="form-group">
    {!! Form::label('buttonlabel3', 'Literal Botón 3:') !!}
    <p>{!! $mplannew->buttonlabel3 !!}</p>
</div>

<!-- footlabel Field -->
<div class="form-group">
    {!! Form::label('footlabel', 'Pié de Página:') !!}
    <p>{!! $mplannew->footlabel !!}</p>
</div>

<!-- Created At Field 
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $mplannew->created_at !!}</p>
</div>-->

<!-- Updated At Field 
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $mplannew->updated_at !!}</p>
</div>-->

<!-- Deleted At Field 
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $mplannew->deleted_at !!}</p>
</div>-->

