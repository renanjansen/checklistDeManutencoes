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
                <form class="d-flex" role="Busca de endereços">
                    <input class="form-control me-2" type="search" placeholder="Busca de endereços" aria-label="Busca de endereços">
                    <button class="btn btn-outline-success" type="submit">Busca de endereços</button>
                </form>
                <a class="navbar-brand" href="#">

                    <button type="button" class="btn btn-primary position-relative p-3">
                        Manutenções feitas
                        <i class="bi bi-tools"style="font-size: 1rem;"></i>
                        <span
                            class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                            {{ 3 }}
                            <span class="visually-hidden">New alerts</span>
                        </span>
                    </button>

                </a>
            </div>
        </nav>
    </header>
    <main class="mt-5">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action"></a>
        </div>

    </main>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
