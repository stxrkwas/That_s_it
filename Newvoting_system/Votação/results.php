
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
                                    <a class="nav-link active" aria-current="page" href="voting.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="results.php">Resultados</a>
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

                    //Verifica o formulário e se foi enviado
                    if($_SERVER["REQUEST_METHOD"] == "POST"){

                        //Verifica se a opção escolhida é valida
                        if(isset($_POST['movie']) && in_array($_POST['movie'], ['Os Vingadores – The Avengers (2012)', 'Vingadores: Era de Ultron (2015)', 'Vingadores: Guerra Infinita (2018)', 'Vingadores: Ultimato (2019)'])){

                            //Lê o arquivo dos votos
                            $counting = file_get_contents("counts.txt");

                            //Converte o conteúdo do arquivo para um array
                            $counting = json_decode($counting, true);

                            //Incremenda o contador da opção escolhida
                            $counting[$_POST['movie']]+= 1;

                            //Salva o array no arquivo de votos
                            file_put_contents("counts.txt", json_encode($counting));
                        }

                    }

                    //Lendo os arquivos de votos
                    $counting = file_get_contents("counts.txt");

                    //Converte o conteúdo do arquivo para um array
                    $counting = json_decode($counting, true);

                    //Exibe os resultados
                    foreach($counting as $movie => $counting){
                        echo "<p>$movie : $counting votos</p>";
                    }

                    //Exclui os votos caso o botão seja clicado
                    if(isset($_POST['delete'])){

                        //Atribuindo os valores 0 para resultados
                        $counting = array(0, 0, 0, 0);

                        //Gravando os resultados no arquivo
                        file_put_contents('counts.txt', implode('\n', $counting));

                        echo "<script>alert('Votos excluidos.');</script>";

                        include('voting.php');

                    }
                    
                ?>

                <!--
                    <?php

                
                        echo "<p> $movie  :  $total votos</p>";

                    ?>

                -->

                    <form method="POST">

                        <a href="voting.php" class="btn btn-success">Votar novamente</a>
                        <button type="submit" name="delete" class="btn btn-danger" href="voting.php">Excluir votos</button>
                    
                    </form>

                </p>
            </div>
            <div class="col-1">&nbsp;</div>
        </div>
    </div>
  </body>
</html>