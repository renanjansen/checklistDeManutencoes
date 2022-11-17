<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

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

        <title>Checklist Manutenções</title>
    </head>
</head>

<body class="">
    <header>
        <nav class="navbar text-light bg-dark">

            <div class="container-fluid mt-2 p-2">
                <h3> Lista de endereços</h3>
                
            </div>
        </nav>
    </header>
    <main class="mt-5">
        <div class="list-group text-center container-fluid">
            @foreach ($manutencoes as $manutencoesFeitas)
               

                    <li href="#" class="list-group-item list-group-item-action shadow-lg p-3 mb-2 bg-body rounded">
                        {{ $manutencoesFeitas->sigla }} - {{ $manutencoesFeitas->endereco }} - {{ $manutencoesFeitas->tipo }}
                       
                    </li>


              
            @endforeach
        </div>

    </main>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
