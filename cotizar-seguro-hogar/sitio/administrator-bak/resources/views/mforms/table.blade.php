<table class="table table-responsive" id="hypo-table">
    <thead>
        <tr>
        <th>Tipo formulario</th>
        <th>N. veces visto</th>
        <th>N. veces llenado</th>
            <!-- <th colspan="3">Action</th> -->
        </tr>
    </thead>
    <tbody>
    @foreach($mforms as $mforms)
        <tr>
            <td>{!! $mforms->formtype !!}</td>
            <td>{!! $mforms->nshow !!}</td>
            <td>{!! $mforms->nfilled !!}</td>
            <!-- <td>
                {!! Form::open(['route' => ['mforms.destroy', $mforms->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('mforms.show', [$mforms->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('mforms.edit', [$mforms->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td> -->
        </tr>
    @endforeach
    </tbody>
</table>