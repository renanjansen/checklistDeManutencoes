<!DOCTYPE html>
<html>

<head>
    <!-- disabled meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Apllicaton CSS -->
    <link rel="stylesheet" type="text/css" href="/css/welcome.blade.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    @livewireStyles
    <title>Registro de Manutenção</title>


</head>

<body>
    <header class="text-center">

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
                            <li><a class="dropdown-item" href="https://elevadoreslib.netlify.app/" target="_blank">Manuais de Elevadores</a></li>
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
                    <a class="navbar-brand" href="/manutencoes">

                        <button type="button" class="btn btn-primary position-relative p-3">
                            Retornar a lista de manutenções feitas
                            <i class="bi bi-view-list"style="font-size: 1rem;"></i>
                        </button>
                    </a>
                </div>
            </div>

        </nav>
    </header>
    <main class="bg-dark mt-5 pt-5">
        @foreach ($Oss as $os)
            <form action="" id="formulario" enctype="multipart/form-data" class="text-white pb-2 mt-3">
                @if (session('msg'))
                    <p class="msg text-center text-dark" style="background-color: gold; border-color:black;">{{ session('msg') }}</p>
                @endif
                @csrf
                <div class=" col-3 form-group row mx-auto text-center mb-3">
                    <p>Tipo de atendimento :</p>

                    <input class="form-control text-center" type="text" id="cliente" name="cliente"
                        value="{{ $os->atendimento }}" disabled>
                </div>

                <div class="form-group row mb-3">
                    <label for="cliente" class="col-12 col-form-label  text-center">Cliente :</label>
                    <div class="col-12">

                        <input class="form-control text-center" type="text" id="cliente" name="cliente"
                            value="{{ $os->cliente }}" disabled>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <div class="col-12">
                        <input class="form-control text-center" type="text" id="mecanico" name="mecanico"
                            placeholder="insira o nome do(s) mecânico(s)" value="{{ $os->mecanico }}" disabled>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="defeito" class="text-center">Defeito encontrado :</label>
                    <div class="text-center mb-3">
                        <input class="form-control text-center" type="text" id="solucao" name="solucao"
                            value="{{ $os->defeito }}" disabled />
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="solucao" class="text-center mb-2">Soluçâo do problema :</label>
                    <div class="text-center">
                        <input class="form-control text-center" type="text" id="solucao" name="solucao"
                            value="{{ $os->solucao }}" disabled />
                    </div>
                </div>
                <div class="col-3 form-group row mx-auto text-center">

                    <p>Material :</p>
                    <input class="form-control text-center" type="text" id="cliente" name="cliente"
                        value="{{ $os->material }}" disabled>
                </div>
                <div class="form-group row text-center mt-3">
                    <div class="mb-3">
                        <h3>Fotos e vídeos de Elevadores : </h3>
                        <img src="/img/imagens/{{ $os->imagens }}" class="img-thumbnail" alt="" width="300" height="200">
                    </div>
                </div>
            </form>
                <div class="col-1 form-group row mx-auto">
                    <a class="navbar-brand" href="/imprimePdfDeOs/{{ $os->manutencao_id }}">
                        <button class="btn btn-primary"
                            id="imprime">
                            Imprimir
                        </button>
                    </a>
        @endforeach





    </main>
    @livewireScripts
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>




</body>

</html>
