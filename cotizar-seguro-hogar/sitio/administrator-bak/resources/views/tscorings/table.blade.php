<table class="table table-responsive" id="hypo-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Pregunta</th>
        <th>Opción</th>
        <th>Descripción</th>
        <th>RCC Score</th>
        <th>RCM Score</th>
        <th>RCB Score</th>
        <th>TREC Score</th>
        <th>TREM Score</th>
        <th>TREB Score</th>
        <!--<th>Nro Veces</th> -->
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tscorings as $tscoring)
        <tr>
            <td>{!! $tscoring->idquestion !!}</td>
            <td>{!! $mquestion[$tscoring->idquestion] !!}</td>
            <td>{!! $tscoring->optionquestion !!}</td>
            <td>{!! $tscoring->descriptionquestion !!}</td>
            <td>{!! $tscoring->rccscore !!}</td>
            <td>{!! $tscoring->rcmscore !!}</td>
            <td>{!! $tscoring->rcbscore !!}</td>
            <td>{!! $tscoring->trecscore !!}</td>
            <td>{!! $tscoring->tremscore !!}</td>
            <td>{!! $tscoring->trebscore !!}</td>
            <!--<td>{!! $tscoring->ntimes !!}</td> -->
            <td>
                {!! Form::open(['route' => ['tscorings.destroy', $tscoring->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <!-- <a href="{!! route('tscorings.show', [$tscoring->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> -->
                    <?php
                        if ($tscoring->idquestion > 4) {
                    ?>
                    <a href="{!! route('tscorings.edit', [$tscoring->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php
                    }
                    ?>
                    <!-- {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Está seguro?')"]) !!} -->
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>