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
                </div>
            </div>
            <div class="position-relative">
                <div class="container-fluid mt-2">
                    <a class="navbar-brand" href="/">

                        <button type="button" class="btn btn-primary position-relative p-3">
                            Retornar a lista de endereços
                            <i class="bi bi-view-list"style="font-size: 1rem;"></i>
                        </button>
                    </a>
                </div>
            </div>

        </nav>
    </header>
    <main class="mt-5">
        <div class="accordion" id="accordionExample">
            @foreach ($mesesDoAno as $key => $mesDoAno)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $mesDoAno }}">

                        <button class="accordion-button {{ $temManutencao }}" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse{{ $mesDoAno }}" aria-expanded="true"
                            aria-controls="collapse{{ $mesDoAno }}" id="btnMes">
                            {{ $mesDoAno }}
                        </button>

                    </h2>
                    <div id="collapse{{ $mesDoAno }}" class="accordion-collapse collapse show"
                        aria-labelledby="heading{{ $mesDoAno }}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @foreach ($manutencoes as $manutencoesFeitas)
                                @if ($key + 1 == date('m', strtotime($manutencoesFeitas->created_at)))
                                    <a class="navbar-brand" href="/pdfDeOs/{{ $manutencoesFeitas->id }}">
                                        <li href="#"
                                            class="list-group-item list-group-item-action shadow-lg p-3 mb-2 bg-body rounded overflow-scroll">
                                                <span class="border border-danger rounded">{{ date('d/m', strtotime($manutencoesFeitas->created_at)) }}</span>
                                            - {{ $manutencoesFeitas->sigla }} - {{ $manutencoesFeitas->endereco }} -
                                            {{ $manutencoesFeitas->tipo }}
                                        </li>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

        </div>


    </main>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        var btnMes = document.querySelectorAll('.accordion-button');
        var corpoDoAcordeao = document.querySelectorAll('.accordion-body');


        for (let i = 0; i < corpoDoAcordeao.length; i++) {

            var li = corpoDoAcordeao[i].querySelector('.list-group-item');
            if (li !== null) {

                btnMes[i].setAttribute("class", "accordion-button bg-danger")

            }

        }
    </script>

</body>

</html>
