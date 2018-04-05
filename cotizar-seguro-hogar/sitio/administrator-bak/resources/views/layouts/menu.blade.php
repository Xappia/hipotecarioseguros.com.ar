<li class="{{ Request::is('mquestions*') ? 'active' : '' }}">
    <a href="{!! route('mquestions.index') !!}"><i class="fa fa-edit"></i><span>Preguntas</span></a>
</li>


<li class="{{ Request::is('mplannews*') ? 'active' : '' }}">
    <a href="{!! route('mplannews.index') !!}"><i class="fa fa-edit"></i><span>Planes</span></a>
</li>

<li class="{{ Request::is('mincludeplans*') ? 'active' : '' }}">
    <a href="{!! route('mincludeplans.index') !!}"><i class="fa fa-edit"></i><span>Coberturas</span></a>
</li>

<li class="{{ Request::is('mprospects*') ? 'active' : '' }}">
    <a href="{!! route('mprospects.index') !!}"><i class="fa fa-edit"></i><span>Prospectos</span></a>
</li>

<!-- <li class="{{ Request::is('tpropectsquiestions*') ? 'active' : '' }}">
    <a href="{!! route('tpropectsquiestions.index') !!}"><i class="fa fa-edit"></i><span>Prospectos / Preguntas</span></a>
</li>

<!-- <li class="{{ Request::is('tprospectplans*') ? 'active' : '' }}">
    <a href="{!! route('tprospectplans.index') !!}"><i class="fa fa-edit"></i><span>Planes de Prospectos</span></a>
</li> -->

<!-- <li class="{{ Request::is('tstatistics*') ? 'active' : '' }}">
    <a href="{!! route('tstatistics.index') !!}"><i class="fa fa-edit"></i><span>Estadísticas</span></a>
</li> -->

<!-- <li class="{{ Request::is('tscorings*') ? 'active' : '' }}">
    <a href="{!! route('tscorings.index') !!}"><i class="fa fa-edit"></i><span>Scorings</span></a>
</li> -->

<!--<li class="{{ Request::is('tstatistics*') ? 'active' : '' }}">
    <a href="{!! route('upload.index') !!}"><i class="fa fa-edit"></i><span>Cargar archivo PDF</span></a>
</li>-->

<!--<li class="{{ Request::is('tcoveragesplans*') ? 'active' : '' }}">
    <a href="{!! route('tcoveragesplans.index') !!}"><i class="fa fa-edit"></i><span>Tcoveragesplans</span></a>
</li> -->




<!--<li class="{{ Request::is('vwProspectsplans*') ? 'active' : '' }}">
    <a href="{!! route('vwProspectsplans.index') !!}"><i class="fa fa-edit"></i><span>Vw Prospectsplans</span></a>
</li> -->

<li class="{{ Request::is('tagreementfiles*') ? 'active' : '' }}">
    <!--<a href="{!! route('tagreementfiles.index') !!}"><i class="fa fa-edit"></i><span>Términos y condiciones</span></a>-->
    <a href="{!! route('tagreementfiles.edit','1') !!}"><i class="fa fa-edit"></i><span>Términos y condiciones</span></a>
</li>

<li>
    <i><span></span></i>
</li>
<li>
    <i><span></span></i>
</li>

<li class="{{ Request::is('vwQuestiontimes*') ? 'active' : '' }}">
    <a href="{!! route('vwQuestiontimes.index') !!}"><i class="fa fa-edit"></i><span style="color:#f38f17">Performance Preguntas</span></a>
</li>

<!--<li class="{{ Request::is('vwQuestions*') ? 'active' : '' }}">
    <a href="{!! route('vwQuestions.index') !!}"><i class="fa fa-edit"></i><span>Performance Respuestas</span></a>
</li>-->

<!--<li class="{{ Request::is('vwProspectformtimes*') ? 'active' : '' }}">
    <a href="{!! route('vwProspectformtimes.index') !!}"><i class="fa fa-edit"></i><span style="color:#f38f17">Performance Formularios</span></a>
</li>-->

<li class="{{ Request::is('mforms*') ? 'active' : '' }}">
    <a href="{!! route('mforms.index') !!}"><i class="fa fa-edit"></i><span style="color:#f38f17">Performance Formularios</span></a>
</li>

<li class="{{ Request::is('vwProspectquestions*') ? 'active' : '' }}">
    <a href="{!! route('vwProspectquestions.index') !!}"><i class="fa fa-edit"></i><span style="color:#f38f17">Performance Prospectos</span></a>
</li>

<!--<li class="{{ Request::is('vwProspectsanswers*') ? 'active' : '' }}">
    <a href="{!! route('vwProspectsanswers.index') !!}"><i class="fa fa-edit"></i><span>Vw Prospectsanswers</span></a>
</li>-->

<!-- <li class="{{ Request::is('mplannews*') ? 'active' : '' }}">
    <a href="{!! route('mplannews.index') !!}"><i class="fa fa-edit"></i><span style="color:#f38f17">Performance Planes</span></a>
</li> -->

<li class="{{ Request::is('mplanperformances*') ? 'active' : '' }}">
    <a href="{!! route('mplanperformances.index') !!}"><i class="fa fa-edit"></i><span style="color:#f38f17">Performance Planes</span></a>
</li>

<li class="{{ Request::is('tplanbuttons*') ? 'active' : '' }}">
    <a href="{!! route('tplanbuttons.index') !!}"><i class="fa fa-edit"></i><span style="color:#f38f17">Performance Botones</span></a>
</li>

<!-- <li class="{{ Request::is('vwProspectsplans*') ? 'active' : '' }}">
    <a href="{!! route('vwProspectsplans.index') !!}"><i class="fa fa-edit"></i><span>Vw Prospectsplans</span></a>
</li> -->

<li>
    <i><span></span></i>
</li>
<li>
    <i><span></span></i>
</li>
<li>
    <i><span></span></i>
</li>
<li>
    <i><span></span></i>
</li>
<li class="{{ Request::is('mquestions*') ? 'active' : '' }}">
    <a href="/" target="_blank"><i class="fa fa-edit"></i><span style="font-weight: 600">IR AL SITIO</span></a>
</li>
