<table class="table table-responsive" id="hypo-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tipo Plan</th>
        <th>Botón 1 Visto</th>
        <th>Botón 1 Clickeado</th>
        <th>Botón 2 Visto</th>
        <th>Botón 2 Clickeado</th>
        <th>Botón 3 Visto</th>
        <th>Botón 3 Clickeado</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tplanbuttons as $tplanbuttons)
        <tr>
            <td>{!! $tplanbuttons->idplan !!}</td>
            <td>{!! $mplannews[$tplanbuttons->idplan] !!}</td>
            <td>{!! $tplanbuttons->btn1v !!}</td>
            <td>{!! $tplanbuttons->btn1c !!}</td>
            <td>{!! $tplanbuttons->btn2v !!}</td>
            <td>{!! $tplanbuttons->btn2c !!}</td>
            <td>{!! $tplanbuttons->btn3v !!}</td>
            <td>{!! $tplanbuttons->btn3c !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>