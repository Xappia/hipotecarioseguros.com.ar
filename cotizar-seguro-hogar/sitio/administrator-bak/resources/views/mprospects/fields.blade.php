<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Lastname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastname', 'Apellido:') !!}
    {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
</div>

<!-- Dni Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dni', 'DNI:') !!}
    {!! Form::text('dni', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Genero:') !!}
    {!! Form::select('gender', , array(0 => 'Masculino', 1 => 'Femenino')) !!}
</div>

<!-- Timezone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('timezone', 'Franja Horaria:') !!}
    {!! Form::text('timezone', null, ['class' => 'form-control']) !!}
</div>

<!-- Idcard Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idcard', 'Tarjeta:') !!}
    {!! Form::number('idcard', null, ['class' => 'form-control']) !!}
</div>

<!-- Phonetype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phonetype', 'Tipo teléfono:') !!}
    {!! Form::text('phonetype', null, ['class' => 'form-control']) !!}
</div>

<!-- Phonecode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phonecode', 'Código de área:') !!}
    {!! Form::number('phonecode', null, ['class' => 'form-control', 'rows' => '3']) !!}
</div>

<!-- Phonenumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phonenumber', 'Número teléfono:') !!}
    {!! Form::number('phonenumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'E-mail:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- formtype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plan', 'Tipo formulario:') !!}
    <!-- {!! Form::text('formtype', null, ['class' => 'form-control']) !!} -->
    {!! Form::select('formtype', array(0 => 'CORTO', 1 => 'LARGO')) !!}    
</div>

<!-- fillingdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fillingdate', 'Fecha de Respuesta:') !!}
    {!! Form::date('fillingdate', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
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
                        <td>{!! $prospectsanswer.question !!}</td>
                    </tr>
                <?php
                }
                ?>
            @endforeach
        </tbody>
    </table>
</div>

<div class="form-group col-sm-6">
    <table class="table table-responsive" id="plans-table">
        <thead>
            <tr>
            <th>Planes</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prospectsanswers as $prospectsanswer)
                <?php
                    if ($prospectsanswer->idprospect == $mprospect->id) {
                ?>
                    <tr>
                        <td>{!! $prospectsanswer.question !!}</td>
                    </tr>
                <?php
                }
                ?>
            @endforeach
        </tbody>
    </table>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mprospects.index') !!}" class="btn btn-default">Cancelar</a>
</div>
