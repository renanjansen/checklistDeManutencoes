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

    <main class="bg-dark mt-5 pt-5">
        @foreach ($Oss as $os)
            <form action="" id="formulario" enctype="multipart/form-data" class="text-white pb-2 mt-3">
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
                        <img src="./img/imagens/{{ $os->imagens }}" class="img-thumbnail" alt="">
                    </div>
                </div>
        @endforeach


        </form>


    </main>
    @livewireScripts
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>




</body>

</html>
