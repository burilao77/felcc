@extends('master')
  @section('content')
<!-- banner -->
<div class="banner2">
    @include('share.navbar')
</div>

<div class="gallery">
     <div class="container">
         <h2>Estado de Registros</h2>
        <table class="table">
            <caption>Todas las Denuncias</caption>
            <thead>
                <tr>
                    <th>nombre Denunciante:</th>
                    <th>fecha de la denuncia</th>
                </tr>
            </thead>
            <tbody>
                @foreach($complaints as $complaint)
                <tr>
                    <td>{{ $complaint->nameDenouncer }}</td>
                    <td>{{ $complaint->created_at }}</td>
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
