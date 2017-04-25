<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="icon" type="image/png" href="../images/favicon.png" sizes="18x18">
    {!! Charts::assets() !!}
    <title> @yield('title') </title>
     {!!Html::style('css/bootstrap.css')!!}
     {!!Html::style('css/bootstrap-switch.min.css')!!}
     {!!Html::style('css/master.css')!!}
          {!!Html::script('/js/jquery.min.js')!!}
     {!!Html::script('/js/bootstrap.js')!!}
     {!!Html::script('/js/bootstrap-switch.min.js')!!}
     {!!Html::style('css/font-awesome.min.css')!!}
     {!!Html::style('css/style.css')!!}

     <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>



</head>
<body>
{!!Html::script('/js/responsiveslides.min.js')!!}


        @yield('content')
</body>
</html>
