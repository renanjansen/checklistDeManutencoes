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
                <form class="d-flex" action="/" role="Busca de endereços">
                    <input class="form-control me-2" type="search" placeholder="Busca de endereços" name="buscar"
                        aria-label="Busca de endereços">
                    <button class="btn btn-outline-success" type="submit">Busca de endereços</button>
                </form>
                <a class="navbar-brand" href="/manutencoes">

                    <button type="button" class="btn btn-primary position-relative p-3">
                        Manutenções feitas
                        <i class="bi bi-tools"style="font-size: 1rem;"></i>
                        <span
                            class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                            {{ count($manutencoes) }}
                            <span class="visually-hidden">New alerts</span>
                        </span>
                    </button>

                </a>
            </div>
        </nav>
    </header>
    @if (session('msg'))
        <p class="msg text-center" style="background-color: gold; border-color:black;">{{ session('msg') }}</p>
    @endif
    <main class="mt-5">
        <div class="list-group text-center container-fluid">
            @foreach ($elevadores as $elevador)
                <form class="mb-1" action="/" method="POST" enctype="multipart/form-data">

                    {{-- MUITO IMPORTANTE!! A diretiva csrf avisa o blade do salvamento  de dados --}}
                    @csrf
                    <div class="container-fluid text-center position-relative">
                        <li href="#"
                            class="list-group-item list-group-item-action shadow-lg p-3 mb-2 bg-body rounded ratio"
                            style="--bs-aspect-ratio: 15%;">


                            <input type="hidden" name="id" value="{{ $elevador->id }}">

                            <iframe class="embed-responsive-item" style="border:0"
                                referrerpolicy="no-referrer-when-downgrade"
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC01rey-uIpM1uQFDRTlaCSKG3pGaH3TaA&q={{ str_replace(' ', '+', $elevador->endereco) }}"
                                allowfullscreen>
                            </iframe>

                        </li>
                        <div class="container-fluid mb-5">
                            <a href="/registroDeOs/{{ $elevador->id }}">
                                <button type="button" class="btn btn-outline-success pr-5"
                                    onclick="return confirm('Tem certeza que deseja cadastrar o elevador  {{ $elevador->endereco }} ?')">
                                    {{ $elevador->sigla }} - {{ $elevador->endereco }} - {{ $elevador->tipo }}
                                    Cadastrar
                                    manutenção
                                </button>
                            </a>
                        </div>
                    </div>



                </form>
            @endforeach
        </div>
