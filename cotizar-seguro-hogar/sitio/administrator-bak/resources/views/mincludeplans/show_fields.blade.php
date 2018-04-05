<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $mincludeplan->id !!}</p>
</div>

<!-- Idplan Field -->
<div class="form-group">
    {!! Form::label('idplan', 'Id Plan:') !!}
    <!-- I<p>{!! $mincludeplan->idplan !!}</p> -->
    <p>{!! $mplan->plan !!}</p>
</div>

<!-- Coverage Field -->
<div class="form-group">
    {!! Form::label('coverage', 'Cobertura:') !!}
    <p>{!! $mincludeplan->coverage !!}</p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Monto:') !!}
    <p>{!! $mincludeplan->amount !!}</p>
</div>

<!-- Created At Field 
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $mincludeplan->created_at !!}</p>
</div>-->

<!-- Updated At Field 
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $mincludeplan->updated_at !!}</p>
</div>-->

<!-- Deleted At Field 
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $mincludeplan->deleted_at !!}</p>
</div>-->

