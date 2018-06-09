<?php
include_once("Artista.php");

$artista = new Artista();

switch ($_GET['acao']){
    case 'salvar':
        if(!empty($_POST['id_artista'])) {
            $artista->alterar($_POST);
        } else {
            $artista->inserir($_POST);
        }
        break;
    case 'excluir':
        $artista->excluir($_GET['id_artista']);
        break;
}

// Redireciona para a página index

header('location: index.php');
?>