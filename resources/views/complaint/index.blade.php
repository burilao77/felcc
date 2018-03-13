
            @extends('master')

  @section('content')

  <!-- banner -->
<div class="banner2">
    @include('share.navbar')
</div>
@if(Session::has('message'))
<div class=" alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{Session::get('message')}}
</div>
@endif
<br><br>
<div class="container">
    <div class="about-head">
        <h2>Lista de Denuncias</h2>
</div>

        <div class="row">
                    <table class="table table-striped">
                    <tr>
                        <th>Codigo</th>

                        
                        <th>Creado</th>
                        <th>Nombre Denunciante</th>
                        <th>Estado</th>
                        <th>Acciones</th>


                    </tr>

 <a href="{{route('complaint.create')}}" class="btn btn-info pull-center">Crear Denuncia</a>

<!--  {!! link_to('complaint/process', $title = 'En Proceso', $attributes = ['class' => 'btn btn-success'], $secure = null) !!} -->
 {!! link_to('complaint/success', $title = 'Resueltos', $attributes = ['class' => 'btn btn-warning pull-center'], $secure = null) !!}
<!-- buscador -->
<div class="pull-right app-pull-right">
{!! Form::open(['route' => 'complaint.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}

  <div class="form-group">

    {!! Form::text('nameDenouncer', null, ['class' => 'form-control', 'placeholder' => 'Nombre Denunciante']) !!}
    <button type="submit" class="btn btn-primary pull-right">Buscar</button>
    </div>
{!! Form::close() !!}
</div>
 <br>
 <br>
                    @foreach($complaints as $complaint)
                        <tr>
                            <td>{{ $complaint->id }}</td>

                            
                            <td>{{ $complaint->created_at->format('d-m-Y') }}</td>
                            <td>{{ $complaint->nameDenouncer }}</td>
                            <td> <?php             
                                if($complaint->active == '0')
                                {
                                    echo "<span class='glyphicon glyphicon-check' title='Resuelto'></span>";
                                }
                                elseif($complaint->active == '1')
                                {
                                    echo "<span class='glyphicon glyphicon-eye-open' title='En Proceso'></span>";
                                } ?>
                            </td>
                            <td>
                                <form action="{{route('complaint.destroy', $complaint->id)}}" method="post">
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <a href="{{route('complaint.edit', $complaint->id)}}" id="boton" class="btn btn-primary">Editar</a>
                                <input type="submit" class="btn btn-danger" onclick="return confirm('Esta seguro de Eliminar esta Denuncia');" name="name" value="Eliminar">
                                <a href="{{route('complaint.show', $complaint->id)}}" class="btn btn-info"><span class="glyphicon glyphicon-print" aria-hidden="true"  title='Imprimir'></span></a>
                           <!--   <a href="{{route('complaint.show', $complaint->id)}}" class="btn btn-info">Show</a> -->
                           

                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </table>
                    {{ $complaints->links() }}
        </div>

@stop
