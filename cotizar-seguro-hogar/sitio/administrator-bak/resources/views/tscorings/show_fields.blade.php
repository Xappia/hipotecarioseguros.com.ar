<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $tscoring->id !!}</p>
</div>

<!-- Idquestion Field -->
<div class="form-group">
    {!! Form::label('idquestion', 'Pregunta:') !!}
    <!-- <p>{!! $tscoring->idquestion !!}</p> -->
    <p>{!! $mquestion[$tscoring->idquestion] !!}</p>
</div>

<!-- Optionquestion Field -->
<div class="form-group">
    {!! Form::label('optionquestion', 'Opción:') !!}
    <p>{!! $tscoring->optionquestion !!}</p>
</div>

<!-- Descriptionquestion Field -->
<div class="form-group">
    {!! Form::label('descriptionquestion', 'Descripción:') !!}
    <p>{!! $tscoring->descriptionquestion !!}</p>
</div>

<!-- Rccscore Field -->
<div class="form-group">
    {!! Form::label('rccscore', 'RCC Score:') !!}
    <p>{!! $tscoring->rccscore !!}</p>
</div>

<!-- Rcmscore Field -->
<div class="form-group">
    {!! Form::label('rcmscore', 'RCM Score:') !!}
    <p>{!! $tscoring->rcmscore !!}</p>
</div>

<!-- Rcbscore Field -->
<div class="form-group">
    {!! Form::label('rcbscore', 'RCB Score:') !!}
    <p>{!! $tscoring->rcbscore !!}</p>
</div>

<!-- Trecscore Field -->
<div class="form-group">
    {!! Form::label('trecscore', 'TREC Score:') !!}
    <p>{!! $tscoring->trecscore !!}</p>
</div>

<!-- Tremscore Field -->
<div class="form-group">
    {!! Form::label('tremscore', 'TREM Score:') !!}
    <p>{!! $tscoring->tremscore !!}</p>
</div>

<!-- Trebscore Field -->
<div class="form-group">
    {!! Form::label('trebscore', 'TREB Score:') !!}
    <p>{!! $tscoring->trebscore !!}</p>
</div>

<!-- Ntimes Field
<div class="form-group">
    {!! Form::label('ntimes', 'Nro. Veces:') !!}
    <p>{!! $tscoring->ntimes !!}</p>
</div> -->

<!-- Created At Field 
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $tscoring->created_at !!}</p>
</div>-->

<!-- Updated At Field 
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $tscoring->updated_at !!}</p>
</div>-->

<!-- Deleted At Field
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $tscoring->deleted_at !!}</p>
</div> -->

