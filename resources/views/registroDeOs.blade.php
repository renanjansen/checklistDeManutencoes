<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

        <title>Registro de Os</title>
    </head>
    <header>

            <nav class="navbar navbar-expand-lg navbar-light bg-info bg-gradient text-white">
                <div class="container-fluid">

                        Sobe e Desce Elevadores
                        <img src="https://www.cutedrop.com.br/wp-content/uploads/2017/07/willy-wonka-e1499947192382.jpg"
                         alt="logo sobe e desce elevadores
                          class="rounded img-thumbnail
                           width=100 height=70>
                    </a>
                    <button class="navbar-toggler"
                     type="button"
                     data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse"
                         id="navbarNavAltMarkup">
                        <div class="navbar-nav">

                                <a class="nav-link"
                                 href="https://shpe.com.br/">
                                 Catálogo de peças
                                </a>


                                <a class="nav-link dropdown-toggle"
                                 href="#" id="navbarDropdown"
                                 role="button"
                                data-bs-toggle="dropdown"
                                 aria-expanded="false">
                                    Ajuda ao mecânico
                                </a>
                                <ul class="dropdown-menu bg-ligth bg-gradient" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item"
                                            href="https://moovitapp.com/rio_de_janeiro-322/poi/pt-br">Gps</a></li>
                                    <li><a class="dropdown-item" href="https://api.whatsapp.com/send?phone=5521985287059">Fale
                                            com a Mesa</a></li>
                                    <li><a class="dropdown-item" href="/manuais">Manuais de Elevadores</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item"
                                            href="http://www.governoaberto.rj.gov.br/servicos/telefones-uteis">Telefones
                                            úteis</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>

            </nav>
    </header>



    <main class="conteiner bg-dark">

        <form action="/registroDeOs" id="formulario" method="POST" enctype="multipart/form-data" class="text-white pb-2">
        {{-- MUITO IMPORTANTE!! A diretiva csrf avisa o blade do salvamento  de dados --}}
                    @csrf
            <div class=" col-3 form-group row mx-auto text-center mb-3" >
                <p>Tipo de atendimento :</p>

                <div class="form-check">
                    <label class="form-check-label" for="atendimento">
                        Atendimento
                    </label>
                    <input class="form-check-input" type="radio" name="atendimento" id="atendimento" value="atendimento">

                </div>
                <div class="form-check">
                    <label class="form-check-label" for="conservacao">
                        Conservacao
                    </label>
                    <input class="form-check-input" type="radio" name="atendimento" id="conservacao"  value="conservacao">

                </div>
            </div>
            @foreach ($elevadores as $elevador)
            <div class="form-group row mb-3">
                <label for="cliente" class="col-12 col-form-label  text-center">Cliente :</label>
                <div class="col-12">

                    <input class="form-control" type="text" id="cliente" name="cliente"
                    value="{{ $elevador->endereco }}">
                    <input type="hidden" name="id" value="{{ $elevador->id }}">
                    <input type="hidden" name="sigla" value="{{ $elevador->sigla }}">
                    <input type="hidden" name="endereco" value="{{ $elevador->endereco }}">
                    <input type="hidden" name="tipo" value="{{ $elevador->tipo }}">
                </div>
            </div>
             @endforeach
            <div class="form-group row mb-3">
                <label for="mecanico" class="col-12 col-form-label text-center">Mecânico :</label>
                <div class="col-12">
                    <input class="form-control" type="text" id="mecanico" name="mecanico"
                        placeholder="insira o nome do(s) mecânico(s)" required>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="defeito" class="text-center">Defeito encontrado :</label>
                <div class="text-center mb-3">
                    <textarea class="form-control" type="text" id="defeito" name="defeito" placeholder="insira o(s) defeito(s) encontrado(s)"
                        required></textarea>
                </div>
            </div>
            <div class="form-group row mb-3">
                <label for="solucao" class="text-center mb-2">Soluçâo do problema :</label>
                <div class="text-center">
                    <textarea class="form-control" type="text" id="solucao" name="solucao" placeholder="descreva a solução"></textarea>
                </div>
            </div>
            <div class="col-3 form-group row mx-auto text-center">

                <p>Material :</p>
                <div class="form-check text-center">
                    <input class="form-check-input" type="radio" name="material" id="colocado" value="colocado">
                    <label class="form-check-label" for="colocado">
                        Colocado
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="material" id="aSerColocado" value="aSerColocado">
                    <label class="form-check-label" for="aSerColocado">
                        A ser Colocado
                    </label>
                </div>
            </div>
            <div class="form-group row text-center mt-3">
                <div class="mb-3">
                    <label for="imagens" class="form-label ">Fotos e vídeos de Elevadores : </label>
                    <input class="form-control" type="file" id="imagens" name="imagens" multiple>
                </div>
            </div>
           <div class="col-4 form-group row mx-auto">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
        </form>

    </main>


     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
