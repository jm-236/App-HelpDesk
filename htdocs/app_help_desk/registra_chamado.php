<?php
    session_start();
    // montagem do texto
    foreach ($_POST as $info) {
        str_replace('#', '-', $info);
    }
    $texto = implode('#', $_POST);

    $texto .= '#'. $_SESSION['id'] . PHP_EOL;
    echo $texto;

    // abretura do arquivo
    $arquivo = fopen('../../scripts_ocultos/arquivo.txt', 'a');
    // store do texto no arquivo
    fwrite($arquivo, $texto);
    // fechamento do arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php')
?>