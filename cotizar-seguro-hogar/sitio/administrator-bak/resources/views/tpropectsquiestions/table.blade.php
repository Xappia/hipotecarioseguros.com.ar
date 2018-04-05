<table class="table table-responsive" id="tpropectsquiestions-table">
    <thead>
        <tr>
            <th>Prospecto</th>
        <th>Pregunta</th>
        <th>Opción</th>
            <th colspan="3">Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tpropectsquiestions as $tpropectsquiestions)
        <tr>
            <td>{!! $tpropectsquiestions->idprospect !!}</td>
            <td>{!! $tpropectsquiestions->idquestion !!}</td>
            <td>{!! $tpropectsquiestions->optionquestion !!}</td>
            <td>
                {!! Form::open(['route' => ['tpropectsquiestions.destroy', $tpropectsquiestions->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tpropectsquiestions.show', [$tpropectsquiestions->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tpropectsquiestions.edit', [$tpropectsquiestions->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>