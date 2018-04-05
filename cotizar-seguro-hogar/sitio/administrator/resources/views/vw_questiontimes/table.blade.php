<table class="table table-responsive" id="hypo-table">
    <thead>
        <tr><!-- Question Field -->
            <th>Id</th>
        <th>Pregunta</th>
        <th>Nro. de Veces</th>
            <!--<th colspan="3">Action</th> -->
        </tr>
    </thead>
    <tbody>
    @foreach($vwQuestiontimes as $vwQuestiontimes)
        <tr>
            <td>{!! $vwQuestiontimes->id !!}</td>
            <td>{!! $vwQuestiontimes->question !!}</td>
            <td>{!! $vwQuestiontimes->ntimes !!}</td>
            <!--<td>
                {!! Form::open(['route' => ['vwQuestiontimes.destroy', $vwQuestiontimes->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('vwQuestiontimes.show', [$vwQuestiontimes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('vwQuestiontimes.edit', [$vwQuestiontimes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td> -->
        </tr>
    @endforeach
    </tbody>
</table>