<table class="table table-responsive" id="hypo-table">
    <thead>
        <tr><!-- Id Field -->
            <!--<th>Id</th> -->
        <th>Pregunta</th>
        <th>Respuesta</th>
            <!--<th colspan="3">Action</th> -->
        </tr>
    </thead>
    <tbody>
    @foreach($vwQuestions as $vwQuestion)
        <tr>
            <!--<td>{!! $vwQuestion->id !!}</td> -->
            <td>{!! $vwQuestion->question !!}</td>
            <td>{!! $vwQuestion->descriptionquestion !!}</td>
            <!--<td>
                {!! Form::open(['route' => ['vwQuestions.destroy', $vwQuestion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('vwQuestions.show', [$vwQuestion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('vwQuestions.edit', [$vwQuestion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td> -->
        </tr>
    @endforeach
    </tbody>
</table>