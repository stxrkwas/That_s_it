<?php session_start() ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Testando pela milésima vez...</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


        <?php 
        
            if(!isset($_SESSION['user'])){

                if(isset($_POST['submit'])){

                    $user = 'Stxrkwas';
                    $password= 'Stxrkwasright';

                    $userCheck = $_POST['user'];
                    $passwordCheck = $_POST['password'];

                    if($user == $userCheck && $password == $passwordCheck){

                        //Logged with success
                        $_SESSION['user'] = $user;
                        header('Location: index.php');

                    }

                    else{

                        //Something went wrong.
                        echo "<script>
                        alert('Seja mal-vindo(a)!🤬');
                        </script>";

                    }

                }

                //include('home.php');
                include('C:\xampp\htdocs\PW II\Assignments\May\Newvoting_system\Votação\voting.php');

            }

            else{

                if(isset($_GET['logout'])){

                    unset($_SESSION['login']);
                    session_destroy();
                    header('Location: index.php');

                }

                include('login.php');

            }
    
        ?>

    </body>

</html>