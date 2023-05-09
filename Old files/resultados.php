<?php

//Verificando se o formulário foi enviado
if(isset($_POST['submit'])){

    //Obtêm a opção selecionada
    $movie = $_POST['movie'];

    //Lê o arquivo de resultados
    $file = 'option.txt';
    $results = file($file, FILE_IGNORE_NEW_LINES);

    //Aumenta a contagem da opção selecionada
    switch($movie){

        case 'Os Vingadores – The Avengers (2012)':
            $results[0]++;
            break;

        case 'Vingadores: Era de Ultron (2015)':
            $results[1]++;
            break;

        case 'Vingadores: Guerra Infinita (2018)':
            $results[2]++;
            break;

        case 'Vingadores: Ultimato (2019)':
            $results[3]++;
            break;


        }

        //Grava os resultados no arquivo
        file_put_contents($file, implode("\n", $results));

    }

    //Lê o arquivo, atualiza, e exibe os resultados 
    $results = file('option.txt', FILE_IGNORE_NEW_LINES);
    $total = array_sum($results);

    //Exclui os votos caso o botão seja clicado
    if(isset($_POST['excluir'])){

        //Atribuindo os valores 0 para resultados
        $results = array(0, 0, 0, 0);

        //Gravando os resultados no arquivo
        file_put_contents('option.txt', implode("\n", $results));
    }

?>


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
        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>
            <div class="col bg-primary">
                <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">SISTEMA DE VOTAÇÃO</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="system.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="resultados.php">Resultados</a>
                                </li>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-1">
                &nbsp;
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>
            <div class="col bg-white">
                &nbsp;
            </div>
            <div class="col-1">
                &nbsp;
            </div>
        </div>
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col bg-white">
                <p class="text-start fs-5"><b>Resultado da votação:</b></p>
                <p class="text-start fs-6">

                    <?php 
                    
                        echo "<li> Filme ".($i+1.).": ".$results[$i]." votos</li>"  
                    ?>
                
                </p>

                <form method="POST">

                    <a href="system.php" class="btn btn-success">Votar novamente</a>
                    <button type="submit" name="delete" class="btn btn-danger">Excluir votos</button>

                </form>
            </div>

            <div class="col-1">
                &nbsp;
            </div>
        </div>
    </div>
  </body>
</html>