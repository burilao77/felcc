@extends('master')
  @section('content')
<!-- banner -->
<div class="banner2">
    @include('share.navbar')
</div>
<!--contact-->
<div class="contact">
     <div class="container">
      <div class="main-head-section">
                   

<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">DETALLE DE LA DENUNCIA</h3>
    </div>
        <div class="panel-body">
        {!! Form::model($complaint,[ 'route' => ['complaint.show', $complaint->id], 'method' => 'POST']) !!}
            <table  class="table">
                <caption></caption>
                <thead>
                    <tr>
                        <th>ID Denuncia</th>
                        <th>Tipo de Denuncia</th>
                        <th>Descripción</th>
                        <th>Fecha de Registro</th>
                        <th>Fecha Modificación</th>
                        <th>Nombre del Denunciado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$complaint->id}}</td>
                        <td>{{$complaint->categories}}</td>
                        <td>{{$complaint->description}}</td>
                        <td>{{ $complaint->created_at->format('d-m-Y')}}</td>
                        <td>{{ $complaint->updated_at->format('d-m-Y') }}</td>
                        <td>{{$complaint->nameDenounced}}</td>
                    </tr>
                </tbody>
            </table>
                   
    
        {!! Form::close() !!}
        </div>
    
</div>

                
      </div>
        <div class="clearfix"> </div>
     </div>
</div>

<!---->


<div class="footer">
     <div class="container">
         <div class="ftr-sec">
             <div class="col-md-4 ftr-grid">
             </div>
             <div class="col-md-4 ftr-grid2">
             <ul>
                </ul>
             </div>
             <div class="col-md-4 ftr-grid3">
             <ul>
                </ul>
             </div>
             <div class="clearfix"></div>
         </div>
     </div>
</div>
<!---->
<div class="copywrite">
     <div class="container">
         <p>VERÓNICA FLORES  UMSS 2017  </p>
     </div>
</div>
<!---->

@stop
