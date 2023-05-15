<?php

    echo "<script>alert('Seja bem-vindo(a) " . $_SESSION['user'] . "!🥳');</script>";
    echo '<a href="?logout">Logout</a>';

?>

<!--
<?php

//Verificando se o formulário foi enviado
if(isset($_POST['submit'])){

    //Obtêm a opção selecionada
    $movie = $_POST['movie'];

    //Lê o arquivo de resultados
    $filem = 'counts.txt';
    $results = file($filem, FILE_IGNORE_NEW_LINES);

    //Aumenta a contagem da opção selecionada
    switch($movie){

        case 'Os Vingadores – The Avengers (2012)':
            $results[0]++;
            break;

        case 'Vingadores: Era de Ultron (2015)':
            $results[0]++;
            break;

        case 'Vingadores: Guerra Infinita (2018)':
            $results[0]++;
            break;

        case 'Vingadores: Ultimato (2019)':
            $results[0]++;
            break;

        }

        //Grava os resultados no arquivo
        file_put_contents($filem, implode('\n', $results));

    }

    //Lê o arquivo, atualiza, e exibe os resultados 
    $results = file('counts.txt', FILE_IGNORE_NEW_LINES);
    $total = array_sum($results);

    //Exclui os votos caso o botão seja clicado
    if(isset($_POST['delete'])){

        //Atribuindo os valores 0 para resultados
        $results = array(0, 0, 0, 0);

        //Gravando os resultados no arquivo
        file_put_contents('counts.txt', implode('\n', $results));

        echo "<script>alert('Votos excluidos.');</script>";

        include('voting.php');

    }

?>-->