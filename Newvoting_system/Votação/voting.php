<!-- Criando o arquivo html -->
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema de Votação</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>

    <body class="bg-body-tertiary">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <div class="container text-center bg-body-tertiary">

            <!-- Criando uma linha -->
            <div class="row">

                <!-- Criando colunas -->
                <div class="col-1">&nbsp;</div>
                <div class="col bg-primary">

                    <!-- Criando uma barra de navegação(navbar) -->
                    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">SISTEMA DE VOTAÇÃO</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="voting.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="results.php">Resultados</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-1">&nbsp;</div>
            </div>
            <!-- Finalizando uma linha -->

            <!-- Criando uma linha -->
            <div class="row">

                <!-- Criando colunas-->
                <div class="col-1">&nbsp;</div>
                <div class="col bg-white">&nbsp;</div>
                <div class="col-1">&nbsp;</div>

            </div>
            <!-- Finalizando uma linha -->

            <!-- Criando uma linha -->
            <div class="row">

                <!-- Criando colunas -->
                <div class="col-1">&nbsp;</div>
                <div class="col bg-white">

                    <!-- Criando parágrafos -->
                    <p class="text-start fs-5"><b>Qual é o seu filme favorito?</b></p>
                    <p class="text-start fs-6">Vote no seu filme favorito dos Vingadores</p>
                    <p>

                        <!-- Criando o formulário -->
                        <form method="POST" action="results.php">

                            <!-- Primeira opção-->
                            <div class="form-check mb-3 text-start">
                                <input class="form-check-input" type="radio" name="movie" value= "Os Vingadores – The Avengers (2012)">
                                <label class="form-check-label" for="flexRadioDefault1"> Os Vingadores – The Avengers (2012)</label>
                            </div>

                             <!-- Segunda opção-->
                            <div class="form-check mb-3 text-start">
                                <input class="form-check-input" type="radio" name="movie" value= "Vingadores: Era de Ultron (2015)">
                                <label class="form-check-label" for="flexRadioDefault2">Vingadores: Era de Ultron (2015)</label>
                            </div>

                             <!-- Terceira opção-->
                            <div class="form-check mb-3 text-start">
                                <input class="form-check-input" type="radio" name="movie" value= "Vingadores: Guerra Infinita (2018)">
                                <label class="form-check-label" for="flexRadioDefault2">Vingadores: Guerra Infinita (2018)</label>
                            </div>

                            <!-- Última opção-->
                            <div class="form-check mb-3 text-start">
                                <input class="form-check-input" type="radio" name="movie" value="Vingadores: Ultimato (2019)">
                                <label class="form-check-label" for="flexRadioDefault2">Vingadores: Ultimato (2019)</label>
                            </div>

                            <!-- Botão de enviar -->
                            <div class="mb-3 text-start">
                                <button type="submit" class="btn btn-primary" name="submit" for="btn-check" data-bs-theme="dark">Enviar</button>
                            </div>

                        <!-- Finalizando o formulário -->
                        </form>

                    <!-- Finalizando o parágrafo -->
                    </p>

                <!-- Fechando a coluna-->
                </div>

                <div class="col-1">&nbsp;</div>

            <!-- Fechando a linha -->
            </div>

        <!-- Finalizando a div -->
        </div>

    <!-- Fechando o body -->
  </body>

<!-- Finalizando o html -->
</html>

