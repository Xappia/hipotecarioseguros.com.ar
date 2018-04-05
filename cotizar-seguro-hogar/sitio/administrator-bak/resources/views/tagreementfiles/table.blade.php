<table class="table table-responsive" id="tagreementfiles-table">
    <thead>
        <tr>
            <th>Ruta</th>
        <!-- <th>Archivo</th> -->
            <th >Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tagreementfiles as $tagreementfile)
        <tr>
            <td>{!! $tagreementfile->path !!}</td>
            <!-- <td>{!! $tagreementfile->filename !!}</td> -->
            <td><!-- Filename Field -->
                {!! Form::open(['route' => ['tagreementfiles.destroy', $tagreementfile->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <!-- <a href="{!! route('tagreementfiles.show', [$tagreementfile->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> -->
                    <a href="{!! route('tagreementfiles.edit', [$tagreementfile->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <!--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} -->
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>