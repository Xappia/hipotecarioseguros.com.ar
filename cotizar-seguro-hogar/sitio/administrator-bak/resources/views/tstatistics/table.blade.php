<table class="table table-responsive" id="tstatistics-table">
    <thead>
        <tr>
            <th>Parametrización de la respuesta</th>
        <th>Fecha Respuesta</th>
            <!--<th colspan="3">Action</th>-->
        </tr>
    </thead>
    <tbody>
    @foreach($tstatistics as $tstatistic)
        <tr>
            <td>{!! $tstatistic->jsonscore !!}</td>
            <td>{!! $tstatistic->answerdate !!}</td>
            <!--
            <td>
                {!! Form::open(['route' => ['tstatistics.destroy', $tstatistic->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tstatistics.show', [$tstatistic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tstatistics.edit', [$tstatistic->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Está seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
            -->
        </tr>
    @endforeach
    </tbody>
</table>