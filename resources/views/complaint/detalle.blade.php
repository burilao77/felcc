
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
        <h2>Detalle de denuncia {{ $complaint->id }}</h2>
    </div>

     <div class="row">
            <div class="col-md-6">
            <div class="panel-body">
            {!! Form::model($complaint,[ 'route' => ['complaint.detalle', $complaint->id], 'method' => 'POST']) !!}

                <h3 class="info"><strong>Descripción:</strong>&nbsp;&nbsp;{{$complaint->description}}</h3>
                <h3 class="info"><strong>Denunciado por:</strong>&nbsp;&nbsp;{{ $complaint->nameDenouncer}}</h3>

              
            {!! Form::close() !!}
            </div>
            </div>           
     </div>

        <div class="col-md-12">
                <h3>Agregar Evidencias</strong></h3>

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
                                        {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'required', 'placeholder' => 'Ingrese la Descripción']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::submit('Guardar Evidencia', ['class' => 'btn btn-info']) !!}

                                    </div>
                                {!! Form::close() !!}
                        </div>
                </div>
        </div>


<div class="container">
    <h4>Cronología de Evidencias</h4>
    @foreach ($evidencias as $evidencia) 
    <ul class="timeline">
        <li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">{{$evidencia->title }}</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> {{ $evidencia->created_at }}</small></p>
            </div>
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
