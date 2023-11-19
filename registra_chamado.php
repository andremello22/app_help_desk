<?php  

   /* $_POST['titulo'];
    $_POST['categoria'];
    $_POST['descricao'];*/
   session_start();
    //estamos trabalhando na montagem do texto
    
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);
    
    //$texto_unido = implode('-', $_POST); poderia ser usado para unir u array em uma unica variável usando '#' como separador
   
    $text = $_SESSION['id'] . "#" . $titulo . '#'. $categoria . '#' . $descricao . PHP_EOL;
    
    //abrindo o arquivo
    $arquivo = fopen('../../app_hep_desk/arquivo.hd', 'a');
    //escrevendo texto
    fwrite($arquivo, $text);
    //fechando o arquivo
    fclose($arquivo);
    //echo($text);
    header('location: abrir_chamado.php');
   
?>