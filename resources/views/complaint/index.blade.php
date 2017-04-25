
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
                        <th>Modificado</th>
                        <th>Estado</th>
                        <th>Acciones</th>


                    </tr>

 <a href="{{route('complaint.create')}}" class="btn btn-info pull-right">Crear Denuncia</a>
 {!! link_to('complaint/process', $title = 'En Proceso', $attributes = ['class' => 'btn btn-success'], $secure = null) !!}
 {!! link_to('complaint/success', $title = 'Resueltos', $attributes = ['class' => 'btn btn-warning pull-center'], $secure = null) !!}<br><br>
                    @foreach($complaints as $complaint)
                        <tr>
                            <td>{{ $complaint->id }}</td>

                            
                            <td>{{ $complaint->created_at->format('d-m-Y') }}</td>
                            <td>{{ $complaint->updated_at->format('d-m-Y') }}</td>
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

                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </table>
        </div>

@stop
