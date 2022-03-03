<?php
    //remover indices do array de sessão
        //unset()
    //destruir a variável de sessao
        //session_destroy()
    
    session_start();

    /*echo '<pre>';
        print_r($_SESSION);
    echo '</pre> <hr/>';

    unset($_SESSION['x']); //O INDICE X É REMOVIDO DO ARRAY $_SESSION
    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';


    session_destroy();
    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';
    */

    session_destroy();
    header('Location: index.php');



?>