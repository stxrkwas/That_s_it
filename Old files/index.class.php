<?php

    //Verifica o formulário e se foi enviado
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        //Verifica se a opção escolhida é valida
        if (isset($_POST["movie"]) && in_array($_POST["movie"], ["Os Vingadores – The Avengers (2012)", "Vingadores: Era de Ultron (2015)", "Vingadores: Guerra Infinita (2018)", "Vingadores: Ultimato (2019)"])) {

            //Lê o arquivo dos votos
            $option = file_get_contents("option.txt");

            //Converte o conteúdo do arquivo para um array
            $option = json_decode($option, true);

            //Incremenda o contador da opção escolhida
            $option[$_POST["movie"]] += 1;

            //Salva o array no arquivo de votos
            file_put_contents("option.txt", json_encode($option));
        }
    }

    //Lendo os arquivos de votos
    $option = file_get_contents("option.txt");

    //Converte o conteúdo do arquivo para um array
    $option = json_decode($option, true);

    //Exibe os resultados
    foreach ($option as $movie => $option){
        echo "<p>$movie: $option votos</p>";
    }

?>