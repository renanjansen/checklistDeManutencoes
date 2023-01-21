<!DOCTYPE html>
<html>

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Apllicaton CSS -->
     <link rel="stylesheet" type="text/css" href="/css/welcome.blade.css" />

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>Registro de Manutenção</title>


</head>

<body>



    <h1>Registro de Os</h1>

    <ul>
        @foreach($Oss as $os)
            <li>{{ $os->sigla }}</li>
            <li>{{ $os->cliente }}</li>
            <li>{{ $os->mecanico }}</li>
            <li>{{ $os->defeito }}</li>
            <li>{{ $os->solucao }}</li>
            <li>{{ $os->material }}</li>




        @endforeach
    </ul>



</body>

</html>
