<?php
include_once("Banda.php");

$banda = new banda();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_banda'])) {
            $banda->alterar($_POST);
        } else {
            $banda->inserir($_POST);
        }
        break;
    case 'excluir':
        $banda->excluir($_GET['id_banda']);
        break;
}

// Redireciona para a página index

header('location: index.php');
?>