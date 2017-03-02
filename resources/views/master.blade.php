<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
     {!!Html::style('css/bootstrap.css')!!}
     {!!Html::script('/js/bootstrap.js')!!}
     {!!Html::style('css/style.css')!!}
     <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

     {!!Html::script('/js/jquery.min.js')!!}

</head>
<body>
{!!Html::script('/js/responsiveslides.min.js')!!}


        @yield('content')
</body>
</html>
