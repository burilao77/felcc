@extends('master')
  @section('content')
<!-- banner -->
<div class="banner2">
    @include('share.navbar')
</div>

<div class="gallery">
     <div class="container">
         <h2>Estado de Registros</h2>
<!-- <div class="pull-left">
{!! Form::open(['route' => 'complaint.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}

  <div class="form-group">

    {!! Form::text('nameDenouncer', null, ['class' => 'form-control', 'placeholder' => 'Nombre Denunciante']) !!}
    <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
{!! Form::close() !!}
</div> -->
        <table class="table">
            <caption>Todas las Denuncias</caption>
            <thead>
                <tr>
                    <th>nombre Denunciante:</th>
                    <th>fecha de la denuncia</th>
                    <th>Estado de la Denuncia</th>
                </tr>
            </thead>
            <tbody>
                @foreach($complaints as $complaint)
                <tr>
                    <td>{{ $complaint->nameDenouncer }}</td>
                    <td>{{ $complaint->created_at }}</td>
                    <td>
                    @if($complaint->active === 1)
                        <button type="button" class="btn btn-warning">En Proceso</button>
                    @else ($complaint->active === 0)
                        <button type="button" class="btn btn-success">Resuelto</button>
                    @endif
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $complaints->links() }}
       <!--  {!! $complaints->render() !!} -->
     </div>
</div>
<!---->

</div>
<!---->


@stop
