<?php
include_once("Genero.php");

$genero = new Genero();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_genero'])) {
            $genero->alterar($_POST);
        } else {
            $genero->inserir($_POST);
        }
        break;
    case 'excluir':
        $genero->excluir($_GET['id_genero']);
        break;
}

// Redireciona para a página index

header('location: index.php');
?>