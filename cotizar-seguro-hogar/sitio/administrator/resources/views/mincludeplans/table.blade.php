<table class="table table-responsive" id="hypo-table">
    <thead>
        <tr>
            <th>Plan</th>
        <th>Cobertura</th>
        <th>Monto</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($mincludeplans as $mincludeplan)
        <tr>
            <td>{!! $mplannew[$mincludeplan->idplan] !!}</td>
            <td>{!! $mincludeplan->coverage !!}</td>
            <td>{!! $mincludeplan->amount !!}</td>
            <td>
                {!! Form::open(['route' => ['mincludeplans.destroy', $mincludeplan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                   
                    <a href="{!! route('mincludeplans.edit', [$mincludeplan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Está seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>