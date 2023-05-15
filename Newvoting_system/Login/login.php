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
        <script type='javascript'>
            
            alert("Seja bem-vindo(a)!🥳");

            alert("Seja mal-vindo(a)!🤬");

        </script>

        <div class="container text-center bg-body-tertiary">
            <div class="row">
                <div class="col-1">
                    &nbsp;
                </div>
                <div class="col" style="background-color: #20C997">
                    <nav class="navbar navbar-expand-lg" style="background-color: #20C997" data-bs-theme="light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">SISTEMA DE VOTAÇÃO</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="login.php">Home</a>
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
                <div class="col-1">&nbsp;</div>
                <div class="col bg-white">&nbsp;</div>
            <div class="col-1">&nbsp;</div>
            </div>
            <div class="row">
                <div class="col-1"> &nbsp;</div>
                <div class="col bg-white">
                    <p class="text-start fs-5"><b>Login</b></p>
                    <p class="text-start fs-6">Insira seu email e senha.</p>
                    <p class="text-start">     
                        <form method ="POST" action="index.php">
                            <div class="mb-3 text-start">

                                <!-- Email ou nome de usuário -->
                                <label for="exampleFormControlInput1" class="form-label">Email ou nome de usuário</label>
                                <input type="text" class="form-control" name="user" placeholder=""></br>

                                <!-- Senha -->
                                <label for="inputPassword5" class="form-label">Senha</label>
                                <input type="password" name="password" class="form-control" aria-labelledby="passwordHelpBlock"></br>

                                <!-- Botão de enviar-->
                                <button type="submit" class="btn btn-primary" for="btn-check" style="background-color: #20C997" data-bs-theme="dark" name="submit">Enviar</button>
                                
                            </div>
                        </form>
                    </p>
                </div>
                <div class="col-1">&nbsp;</div>
            </div>
        </div>
    </body>
</html>