<table class="table table-responsive" id="tprospectplans-table">
    <thead>
        <tr>
            <th>Id Plan</th>
        <th>Json Score</th>
        <th>Score</th>
        <th>Fecha Respuesta</th>
        <th>Monto 1</th>
        <th>Monto 2</th>
        <th>Monto 3</th>
        <th>Monto 4</th>
        <th>Cobertura 1</th>
        <th>Cobertura 2</th>
        <th>Cobertura 3</th>
        <th>Cobertura 4</th>
            <th colspan="3">Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tprospectplans as $tprospectplan)
        <tr>
            <td>{!! $tprospectplan->idplan !!}</td>
            <td>{!! $tprospectplan->jsonscore !!}</td>
            <td>{!! $tprospectplan->score !!}</td>
            <td>{!! $tprospectplan->answerdate !!}</td>
            <td>{!! $tprospectplan->amount1 !!}</td>
            <td>{!! $tprospectplan->amount2 !!}</td>
            <td>{!! $tprospectplan->amount3 !!}</td>
            <td>{!! $tprospectplan->amount4 !!}</td>
            <td>{!! $tprospectplan->coverage1 !!}</td>
            <td>{!! $tprospectplan->coverage2 !!}</td>
            <td>{!! $tprospectplan->coverage3 !!}</td>
            <td>{!! $tprospectplan->coverage4 !!}</td>
            <td>
                {!! Form::open(['route' => ['tprospectplans.destroy', $tprospectplan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tprospectplans.show', [$tprospectplan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tprospectplans.edit', [$tprospectplan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Está seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>