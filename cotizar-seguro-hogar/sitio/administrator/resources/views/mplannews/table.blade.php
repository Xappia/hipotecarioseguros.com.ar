<table class="table table-responsive" id="hypo-table">
    <thead>
        <tr>
            <th>Tipo</th>
        <th>Plan</th>
        <th>Imagen</th>
        <th>Monto del Plan</th>
        <th>Costo/Día</th>
        <th>Cobertura 1</th>
        <th>Monto 1</th>
        <th>Cobertura 2</th>
        <th>Monto 2</th>       
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($mplannews as $mplannew)
        <tr>
            <td>{!! $mplannew->type !!}</td>
            <td>{!! $mplannew->plan !!}</td>
            <td>{!! $mplannew->image !!}</td>
            <td>{!! $mplannew->amountplan !!}</td>
            <td>{!! $mplannew->costday !!}</td>
            <td>{!! $mplannew->coverage1 !!}</td>
            <td>{!! $mplannew->amount1 !!}</td>
            <td>{!! $mplannew->coverage2 !!}</td>
            <td>{!! $mplannew->amount2 !!}</td>            
            <td>
                {!! Form::open(['route' => ['mplannews.destroy', $mplannew->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                   
                    <a href="{!! route('mplannews.edit', [$mplannew->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <!-- {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Está seguro?')"]) !!} -->
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>