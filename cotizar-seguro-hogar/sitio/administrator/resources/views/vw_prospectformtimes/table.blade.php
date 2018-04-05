<table class="table table-responsive" id="hypo-table">
    <thead>
        <tr>
            <!-- <th>Id</th> -->
        <th>Tipo formulario</th>
        <th>N. veces visto</th>
        <th>N. veces llenado</th>
            <!-- <th colspan="3">Action</th> -->
        </tr>
    </thead>
    <tbody>
    @foreach($vwProspectformtimes as $vwProspectformtimes)
        <tr>
            <td>{!! $vwProspectformtimes->formtype !!}</td>
            <td>{!! $vwProspectformtimes->ntimes !!}</td>
            <td>{!! '0' !!}</td>
            <!-- <td>
                {!! Form::open(['route' => ['vwProspectformtimes.destroy', $vwProspectformtimes->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('vwProspectformtimes.show', [$vwProspectformtimes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('vwProspectformtimes.edit', [$vwProspectformtimes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td> -->
        </tr>
    @endforeach
    </tbody>
</table>