
<table id="hypo-table" class="table table-responsive"> <!--class="display nowrap"-->
    <thead>
        <tr>
            <th>Id</th>
            <th>Pregunta</th>
        <th>Tipo</th>
        <th>Página de la pregunta php</th>
        <!--<th>Score</th>
        <th>Parametrización de la respuesta</th>-->
        <th>Habilitada?</th>
        <th>Pregunta dependiente</th>
        <th>Respuesta dependiente?</th>
        <th>Categoría</th>
        <th>Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($mquestions as $mquestion)
        <?php
        if ($mquestion->id <= 4) {
        ?>
            <tr style="color:#f38f17">
                <td><b>{!! $mquestion->id !!}</b></td>
                <td><b>{!! $mquestion->description !!}</b></td>

                <?php
                      switch( $mquestion->type ) {
                        case 1: $type = 'Selección única'; break;
                        case 2: $type = 'Selección multiple'; break;
                        case 3: $type = 'Ordenamiento'; break;
                        case 4: $type = 'Valor único'; break;
                    }
                ?>

                <td><b>{!! $type !!}</b></td>
                <td><b>{!! $mquestion->phpfile !!}</b></td>
                <!--<td>{!! $mquestion->score !!}</td>
                <td>{!! $mquestion->jsonscore !!}</td>-->

                <?php
                      switch( $mquestion->highlight ) {
                        case 0: $highlight = 'No'; break;
                        case 1: $highlight = 'Si'; break;
                    }
                ?>

                <td><b>{!! $highlight !!}</b></td>

                <?php
                      switch( $mquestion->dependentquestion ) {
                        case 0: $dependentquestion = ''; break;
                        case 1: $dependentquestion = 'Pregunta 1'; break;
                        case 2: $dependentquestion = 'Pregunta 2'; break;
                        case 3: $dependentquestion = 'Pregunta 3'; break;
                        case 4: $dependentquestion = 'Pregunta 4'; break;
                    }
                ?>            
                <td><b>{!! $dependentquestion !!}</b></td>
                <td><b>{!! $mquestion->dependentanswer !!}</b></td>

                <?php
                      switch( $mquestion->category ) {
                        case 0: $category = 'Obligatoria'; break;
                        case 1: $category = 'Todas'; break;
                        case 2: $category = 'Robo'; break;
                        case 3: $category = 'Electrodomésticos'; break;
                    }
                ?>

                <td><b>{!! $category !!}</b></td>

                <td>
                    {!! Form::open(['route' => ['mquestions.destroy', $mquestion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        
                        <!-- <a href="{!! route('mquestions.edit', [$mquestion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Está seguro?')"]) !!} -->
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        <?php
        } else {
        ?>
            <tr>
                <td>{!! $mquestion->id !!}</td>
                <td>{!! $mquestion->description !!}</td>

                <?php
                      switch( $mquestion->type ) {
                        case 1: $type = 'Selección única'; break;
                        case 2: $type = 'Selección multiple'; break;
                        case 3: $type = 'Ordenamiento'; break;
                        case 4: $type = 'Valor único'; break;
                    }
                ?>

                <td>{!! $type !!}</td>
                <td>{!! $mquestion->phpfile !!}</td>


                <?php
                      switch( $mquestion->highlight ) {
                        case 0: $highlight = 'No'; break;
                        case 1: $highlight = 'Si'; break;
                    }
                ?>

                <td>{!! $highlight !!}</td>

                <?php
                      switch( $mquestion->dependentquestion ) {
                        case 0: $dependentquestion = ''; break;
                        case 1: $dependentquestion = 'Pregunta 1'; break;
                        case 2: $dependentquestion = 'Pregunta 2'; break;
                        case 3: $dependentquestion = 'Pregunta 3'; break;
                        case 4: $dependentquestion = 'Pregunta 4'; break;
                    }
                ?>            
                <td>{!! $dependentquestion !!}</td>
                <td>{!! $mquestion->dependentanswer !!}</td>

                <?php
                      switch( $mquestion->category ) {
                        case 0: $category = 'Obligatoria'; break;
                        case 1: $category = 'Todas'; break;
                        case 2: $category = 'Robo'; break;
                        case 3: $category = 'Electrodomésticos'; break;
                    }
                ?>

                <td>{!! $category !!}</td>

                <td>
                    {!! Form::open(['route' => ['mquestions.destroy', $mquestion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        
                        <a href="{!! route('mquestions.edit', [$mquestion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <!-- {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Está seguro?')"]) !!} -->
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
    <?php
    }
    ?>
    @endforeach
    </tbody>
</table>
