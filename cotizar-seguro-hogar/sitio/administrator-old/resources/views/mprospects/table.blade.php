<table class="table table-responsive" id="hypo-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Apellido</th>
        <th>DNI</th>
        <!--<<th>Genero</th> -->
        <!--<<th>Franja Horaria</th> -->
        <!--<th>Tarjeta</th> -->
        <th>Tipo teléfono</th>
        <th>Código de área</th>
        <th>Número teléfono</th>
        <!--<th>E-mail</th> -->
        <th>Tipo formulario</th>
        <th>Fecha formulario</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($mprospects as $mprospect)
        <tr>
            <td>{!! $mprospect->name !!}</td>
            <td>{!! $mprospect->lastname !!}</td>
            <td>{!! $mprospect->dni !!}</td>
            <?php
                  switch( $mprospect->gender ) {
                    case 2: $gender = 'Masculino'; break;
                    case 1: $gender = 'Femenino'; break;
                    default: $gender = ''; break;
                }
            ?>
            <!--<<td>{!! $gender !!}</td> -->
            <!--<<td>{!! $mprospect->timezone !!}</td> -->
            <!--<td>{!! $mprospect->idcard !!}</td> -->
            <td>{!! $mprospect->phonetype !!}</td>
            <td>{!! $mprospect->phonecode !!}</td>
            <td>{!! $mprospect->phonenumber !!}</td>
            <!--<td>{!! $mprospect->email !!}</td> -->
            <?php
                  switch( $mprospect->formtype ) {
                    case 0: $formtype = 'CORTO'; break;
                    case 1: $formtype = 'LARGO'; break;
                }
            ?>
            <td>{!! $formtype !!}</td>
            <td>{!! date_format($mprospect->fillingdate, 'd-m-Y') !!}</td>
            <td>
                {!! Form::open(['route' => ['mprospects.destroy', $mprospect->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('mprospects.show', [$mprospect->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <!--<a href="{!! route('mprospects.edit', [$mprospect->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Está seguro?')"]) !!} -->
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>