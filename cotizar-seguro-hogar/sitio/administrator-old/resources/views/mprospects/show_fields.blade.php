<div class="row">
<!-- Id Field -->
    <div class="col-lg-6">
        {!! Form::label('id', 'Id:') !!}
        <p>{!! $mprospect->id !!}</p>
    </div>
 </div>
    <!-- Name Field -->
    <div class="col-lg-6">
        {!! Form::label('name', 'Nombre:') !!}
        <p>{!! $mprospect->name !!}</p>
    </div>
<div class="row">
<!-- Lastname Field -->
<div class="col-lg-6">
    {!! Form::label('lastname', 'Apellido:') !!}
    <p>{!! $mprospect->lastname !!}</p>
</div>

<!-- Dni Field -->
<div class="col-lg-6">
    {!! Form::label('dni', 'DNI:') !!}
    <p>{!! $mprospect->dni !!}</p>
</div>
</div>
<div class="row">
<!-- Gender Field -->
<?php
      switch( $mprospect->gender ) {
        case 0: $gender = 'Masculino'; break;
        case 1: $gender = 'Femenino'; break;
        default: $gender = ''; break;
    }
?>
<div class="col-lg-6">
    {!! Form::label('gender', 'Genero:') !!}
    <p>{!! $gender !!}</p>
</div>

<!-- Timezone Field -->
<div class="col-lg-6">
    {!! Form::label('timezone', 'Franja Horaria:') !!}
    <p>{!! $mprospect->timezone !!}</p>
</div>
</div>
<div class="row">
<!-- Idcard Field -->
<div class="col-lg-6">
    {!! Form::label('idcard', 'Tarjeta:') !!}
    <p>{!! $mprospect->idcard !!}</p>
</div>

<!-- Phonetype Field -->
<div class="col-lg-6">
    {!! Form::label('phonetype', 'Tipo teléfono:') !!}
    <p>{!! $mprospect->phonetype !!}</p>
</div>
</div>
<!-- Phonecode Field -->
<div class="col-lg-6">
    {!! Form::label('phonecode', 'Código de área:') !!}
    <p>{!! $mprospect->phonecode !!}</p>
</div>
<div class="row">
<!-- Phonenumber Field -->
<div class="col-lg-6">
    {!! Form::label('phonenumber', 'Número teléfono:') !!}
    <p>{!! $mprospect->phonenumber !!}</p>
</div>

<!-- Email Field -->
<div class="col-lg-6">
    {!! Form::label('email', 'E-mail:') !!}
    <p>{!! $mprospect->email !!}</p>
</div>
</div>
<!-- formtype Field -->
<?php
      switch( $mprospect->formtype ) {
        case 0: $formtype = 'CORTO'; break;
        case 1: $formtype = 'LARGO'; break;
    }
?>
<div class="row">
<div class="col-lg-6">
    {!! Form::label('formtype', 'Tipo formulario:') !!}
    <p>{!! $formtype !!}</p>
</div>

<!-- fillingdate Field -->
<div class="col-lg-6">
    {!! Form::label('fillingdate', 'Fecha formulario:') !!}
    <p>{!! date_format($mprospect->fillingdate, 'd-m-Y') !!}</p>
</div>

<div class="col-lg-6">
    <table class="table table-responsive" id="prospectsanswers-table">
        <thead>
            <tr>
            <th>Respuestas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prospectsanswers as $prospectsanswer)
                <?php
                    if ($prospectsanswer->idprospect == $mprospect->id) {
                ?>
                    <tr>
                        <td>{!! $prospectsanswer->question . ': ' . $prospectsanswer->descriptionquestion !!}</td>
                    </tr>
                <?php
                }
                ?>
            @endforeach
        </tbody>
    </table>
</div>

<div class="col-lg-6">
    <table class="table table-responsive" id="prospectsanswers-table">
        <thead>
            <tr>
            <th>Planes</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prospectsplans as $prospectsplan)
                <?php
                    if ($prospectsplan->id == $mprospect->id) {
                ?>
                    <tr>
                        <td>{!! $prospectsplan->type  . ': ' . $prospectsplan->planname !!}</td>
                    </tr>
                <?php
                }
                ?>
            @endforeach
        </tbody>
    </table>
</div>


</div>

