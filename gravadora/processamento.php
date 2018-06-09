<?php
include_once("Gravadora.php");

$gravadora = new Gravadora();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_gravadora'])) {
            $gravadora->alterar($_POST);
        } else {
            $gravadora->inserir($_POST);
        }
        break;
    case 'excluir':
        $gravadora->excluir($_GET['id_gravadora']);
        break;
}

// Redireciona para a página index

header('location: index.php');
?>