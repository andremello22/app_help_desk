<?php 
    session_start();
    //remove idices do array
    //unset('autenticado'); remove o indice autenticado do array
    //remove o índice somente se ele existe, não apresenta erro caso não exista

    //destruir váriavel de sessão
    //session_destroy();
    session_destroy();
    header('location: index.php');



?>