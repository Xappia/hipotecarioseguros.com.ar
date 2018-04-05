<table class="table table-responsive" id="hypo-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tipo</th>
        <th>Plan</th>
        <th>Nro. Veces</th>
    </thead>
    <tbody>
    @foreach($mplannews as $mplannew)
        <tr>
            <td>{!! $mplannew->id !!}</td>
            <td>{!! $mplannew->type !!}</td>
            <td>{!! $mplannew->plan !!}</td>
            <td>{!! $mplannew->ntimes !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>