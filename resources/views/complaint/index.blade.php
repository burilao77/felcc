
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
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Creado</th>
                        <th>Modificado</th>
                        <th>Acciones</th>

                    </tr>

                    <a href="{{route('complaint.create')}}" class="btn btn-info pull-right">Crear Denuncia</a><br><br>
                    @foreach($complaints as $complaint)
                        <tr>
                            <td>{{ $complaint->id }}</td>
                            <td>{{ $complaint->title }}</td>
                            <td>{{ $complaint->description }}</td>
                            <td>{{ $complaint->created_at->format('d-m-Y') }}</td>
                            <td>{{ $complaint->updated_at->format('d-m-Y') }}</td>
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
