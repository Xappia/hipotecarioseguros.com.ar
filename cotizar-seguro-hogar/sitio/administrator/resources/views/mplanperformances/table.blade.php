<table class="table table-responsive" id="hypo-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tipo</th>
        <th>Plan</th>
        <th>Nro. de Veces</th>
        </tr>
    </thead>
    <tbody>
    @foreach($mplanperformances as $mplanperformance)
        <tr>
            <td>{!! $mplanperformance->id !!}</td>
            <td>{!! $mplanperformance->type !!}</td>
            <td>{!! $mplanperformance->plan !!}</td>
            <td>{!! $mplanperformance->ntimes !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>