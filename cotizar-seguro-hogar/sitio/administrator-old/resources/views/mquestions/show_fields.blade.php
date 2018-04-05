<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $mquestion->id !!}</p>
</div>

<!-- Question Field -->
<div class="form-group">
    {!! Form::label('question', 'Pregunta:') !!}
    <p>{!! $mquestion->question !!}</p>
</div>

<!-- Type Field -->

<?php
      switch( $mquestion->type ) {
        case 1: $type = 'Selección única'; break;
        case 2: $type = 'Selección multiple'; break;
        case 3: $type = 'Ordenamiento'; break;
        case 4: $type = 'Valor único'; break;
    }
?>

<div class="form-group">
    {!! Form::label('type', 'Tipo:') !!}
    <p>{!! $type !!}</p>
</div>

<!-- Phpfile Field -->
<div class="form-group">
    {!! Form::label('phpfile', 'Página de la pregunta php:') !!}
    <p>{!! $mquestion->phpfile !!}</p>
</div>

<!-- Score Field 
<div class="form-group">
    {!! Form::label('score', 'Score:') !!}
    <p>{!! $mquestion->score !!}</p>
</div>-->

<!-- Jsonscore Field 
<div class="form-group">
    {!! Form::label('jsonscore', 'Parametrización de la respuesta:') !!}
    <p>{!! $mquestion->jsonscore !!}</p>
</div>-->

<!-- Highlight Field -->

<?php
      switch( $mquestion->highlight ) {
        case 0: $highlight = 'No'; break;
        case 1: $highlight = 'Si'; break;
    }
?>

<div class="form-group">
    {!! Form::label('highlight', 'Habilitada?') !!}
    <p>{!! $highlight !!}</p>
</div>

<!-- DependentQuestion Field -->

<?php
      switch( $mquestion->dependentquestion ) {
        case 0: $dependentquestion = ''; break;
        case 1: $dependentquestion = 'Pregunta 1'; break;
        case 2: $dependentquestion = 'Pregunta 2'; break;
        case 3: $dependentquestion = 'Pregunta 3'; break;
        case 4: $dependentquestion = 'Pregunta 4'; break;
    }
?>

<div class="form-group">
    {!! Form::label('dependentquestion', 'Pregunta dependiente:') !!}
    <p>{!! $dependentquestion !!}</p>
</div>

<!-- DependentQuestion Field -->
<div class="form-group">
    {!! Form::label('dependentanswer', 'Opción dependiente:') !!}
    <p>{!! $mquestion->dependentanswer !!}</p>
</div>

<!-- Category Field -->
<?php
      switch( $mquestion->category ) {
        case 0: $category = 'Obligatoria'; break;
        case 1: $category = 'Todas'; break;
        case 2: $category = 'Robo'; break;
        case 3: $category = 'Electrodomésticos'; break;
    }
?>

<div class="form-group">
    {!! Form::label('category', 'Categoría:') !!}
    <p>{!! $category !!}</p>
</div>

<!-- Created At Field 
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $mquestion->created_at !!}</p>
</div>-->

<!-- Updated At Field
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $mquestion->updated_at !!}</p>
</div> -->

<!-- Deleted At Field 
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $mquestion->deleted_at !!}</p>
</div>-->

