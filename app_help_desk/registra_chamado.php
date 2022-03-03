<?php

    session_start();

    echo $formatarChamado = implode('#', str_replace('#', '-', $_POST));
    $registroChamado = $_SESSION['id']. '#' . $formatarChamado . PHP_EOL;


    //CRIAÇÃO DO ARQUIVO TXT PARA ARMAZENAR O REGISTRO DO CHAMADO
    $arquivo = fopen('arquivo.hd', 'a');

        fwrite($arquivo, $registroChamado);

    fclose($arquivo);


    header('Location: abrir_chamado.php');

    


?>