<table class="table table-responsive" id="vwProspectsplans-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Lastname</th>
        <th>Type</th>
        <th>Vw Prospectsplanscol</th>
        <th>Amountplan</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($vwProspectsplans as $vwProspectsplans)
        <tr>
            <td>{!! $vwProspectsplans->name !!}</td>
            <td>{!! $vwProspectsplans->lastname !!}</td>
            <td>{!! $vwProspectsplans->type !!}</td>
            <td>{!! $vwProspectsplans->vw_prospectsplanscol !!}</td>
            <td>{!! $vwProspectsplans->amountplan !!}</td>
            <td>
                {!! Form::open(['route' => ['vwProspectsplans.destroy', $vwProspectsplans->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('vwProspectsplans.show', [$vwProspectsplans->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('vwProspectsplans.edit', [$vwProspectsplans->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>