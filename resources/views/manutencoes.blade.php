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
                <h3> Lista de Manutenções feitas</h3>
                <a class="navbar-brand" href="/">

                    <button type="button" class="btn btn-primary position-relative p-3">
                        Retornar a lista de endereços
                        <i class="bi bi-view-list"style="font-size: 1rem;"></i>
                    </button>

                </a>

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
                                            class="list-group-item list-group-item-action shadow-lg p-3 mb-2 bg-body rounded">
                                            <span
                                                class="border border-danger rounded">{{ date('d/m', strtotime($manutencoesFeitas->created_at)) }}</span>
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
