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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>


        <title>Checklist Manutenções</title>
    </head>
</head>

<body class="">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-info bg-gradient text-white text-center fixed-top">
            <div class="container-fluid text-center">

                Sobe e Desce Elevadores
                <img src="https://www.cutedrop.com.br/wp-content/uploads/2017/07/willy-wonka-e1499947192382.jpg"
                    alt="logo sobe e desce elevadores" class="rounded img-thumbnail" width="50" height="35">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">

                        <a class="nav-link" href="https://shpe.com.br/">
                            Catálogo de peças
                        </a>


                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Ajuda ao mecânico
                        </a>
                        <ul class="dropdown-menu bg-ligth bg-gradient" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item"
                                    href="https://moovitapp.com/rio_de_janeiro-322/poi/pt-br">Gps</a></li>
                            <li><a class="dropdown-item" href="https://api.whatsapp.com/send?phone=5521985287059">Fale
                                    com a Mesa</a></li>
                            <li><a class="dropdown-item" type="button" href="https://elevadoreslib.netlify.app/"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">Manuais de Elevadores</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item"
                                    href="http://www.governoaberto.rj.gov.br/servicos/telefones-uteis">Telefones
                                    úteis</a></li>

                        </ul>
                        </li>
                        </ul>
                    </div>
                    <form class="d-flex" action="/" role="Busca de endereços">
                        <input class="form-control me-2" type="search" placeholder="Busca de endereços" name="buscar"
                            aria-label="Busca de endereços">
                        <button class="btn btn-outline-success" type="submit">Busca de endereços</button>
                    </form>
                </div>
            </div>
            <div class="position-relative">
                <div class="container-fluid mt-2">
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
            </div>

        </nav>
    </header>
    @if (session('msg'))
        <p class="msg text-center" style="background-color: gold; border-color:black;">{{ session('msg') }}</p>
    @endif
    <main class="mt-5">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Manuais de Elevadores</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <iframe src="https://elevadoreslib.netlify.app/" width="100%" height="600"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="list-group text-center container-fluid pt-5">
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
            <div class="container-fluid text-center">
                {{ $elevadores->links() }}
            </div>
        </div>
    </main>
