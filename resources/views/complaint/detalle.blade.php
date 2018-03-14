
@extends('master')
 {!!Html::style('css/estilo.css')!!}

  @section('content')

  <!-- banner -->
<div class="banner2">
    @include('share.navbar')
</div>

<br><br>
<div class="container">
    <div class="about-head">
        <h2>Detalle de la Denuncia</h2>
    </div>

     <div class="row">
            <div class="col-md-6">
            <div class="panel-body">
            {!! Form::model($complaint,[ 'route' => ['complaint.detalle', $complaint->id], 'method' => 'POST']) !!}

                <h4 class="info"><strong>Descripción:</strong>&nbsp;&nbsp;{{$complaint->description}}</h4><br>
                <h4 class="info"><strong>Denunciado por:</strong>&nbsp;&nbsp;{{ $complaint->nameDenouncer}}</h4>

              
            {!! Form::close() !!}
            </div>
            </div>           
     </div>
    
        <div class="col-md-12" id="borde-evento"><br>
                <h3 style="text-align:center"><strong>Agregar Evidencias</strong></h3>

                        <div class="panel-body">
                                {!! Form::open(['route' => 'evidence.store', 'method' => 'POST']) !!}
                                {{ csrf_field() }}
                                
                                <input type="hidden" name="complaint_id" value="{{$complaint->id}}">

                                    <div class="form-group">
                                        {!! Form::label('title', 'Título de la Evidencia') !!}
                                        {!! Form::text('title', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingresa un Título'])!!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('descripcion', 'Descripción') !!}
                                        {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingrese la Descripción', 'rows' => 3]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::submit('Guardar Evidencia', ['class' => 'btn btn-info']) !!}

                                    </div>
                                {!! Form::close() !!}
                        </div>
                </div>
        </div>
<br>

<div class="container">
    <h3 style="text-align:center"><strong>Cronología de Evidencias</strong></h3>
    @foreach ($evidencias as $evidencia) 
    <ul class="timeline">
        <li>
          <div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"><strong>{{$evidencia->title }}</strong></h4><br>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> {{ $evidencia->created_at }}</small></p>
            </div><br>
            <div class="timeline-body">
              <p>{{$evidencia->descripcion }}</p>
            </div>
          </div>
        </li>
    </ul>
      @endforeach
</div>


</div>


@stop
