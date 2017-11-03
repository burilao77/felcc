<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Denuncia</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 
  </head>
  <body>
    <main>
      <h1 class="text-center"><small class="pull-left"><span>Registrado</span><br />{{ $complaint->created_at->format('d-m-Y') }}</small> Denuncia Penal <small class="pull-right"><span>Modificado</span><br />{{ $complaint->updated_at->format('d-m-Y') }}</small></h1>
      <table class="table">
        <thead>
          <tr>
            <th class="service">Denunciante</th>
            <th class="desc">DNI/CI</th>
            <th>Descripcion</th>
            <th>Tipo Denuncia</th>
            <th>Denunciado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">{{ $complaint->nameDenouncer }}</td>
            <td class="desc">{{ $complaint->dniDenouncer }}</td>
            <td class="unit">{{ $complaint->description }}</td>
            <td class="qty">
              @if($complaint->categories === 'homicide')
                  Homicidio
                  @elseif($complaint->categories === 'abuse')
                    Abuso
                      @else ($complaint->categories === 'Stole')
                        Robo
              @endif
            </td>
            <td class="total">{{ $complaint->nameDenounced }}</td>
          </tr>
          <tr>
            <td colspan="4" class="sub"></td>
            <td class="sub total"></td>
          </tr>
          <tr>
            <td colspan="4"></td>
            <td class="total"></td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">Firma: {{ $complaint->nameDenouncer }}</td>

          </tr>
        </tbody>
      </table>

      </div>
      <div id="notices">
        <div>NOTA:</div>
        <div class="notice">Esta solo es una comprobante que realizo su denuncia.</div>
      </div>
    </main>
    <footer>
      Policia Nacional de Bolivia.
    </footer>
  </body>
</html>