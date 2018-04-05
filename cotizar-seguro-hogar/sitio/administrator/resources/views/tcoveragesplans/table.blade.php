<table class="table table-responsive" id="tcoveragesplans-table">
    <thead>
        <tr>
            <th>Planid</th>
        <th>Name</th>
        <th>Amount</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tcoveragesplans as $tcoveragesplan)
        <tr>
            <td>{!! $tcoveragesplan->planid !!}</td>
            <td>{!! $tcoveragesplan->name !!}</td>
            <td>{!! $tcoveragesplan->amount !!}</td>
            <td>
                {!! Form::open(['route' => ['tcoveragesplans.destroy', $tcoveragesplan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tcoveragesplans.show', [$tcoveragesplan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tcoveragesplans.edit', [$tcoveragesplan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>